<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCart;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class CartController extends Controller
{
    public function addToCart($id) {
       $transaction = Transaction::all()->where('user_id', 'LIKE', Auth::user()->id)->where('is_finished', 'LIKE', 0)->first();
       $product_cart = ProductCart::all()->where('product_id', 'LIKE', $id)->where('user_id', 'LIKE', Auth::user()->id)->where('transaction_id', 'LIKE', $transaction->id);
       $product = Product::findOrFail($id);
       if (count($product_cart) == 0) {
        $product_cart = new ProductCart();
        $product_cart->product_id = $id;
        $product_cart->transaction_id = $transaction->id;
        $product_cart->user_id = Auth::user()->id;
        $product_cart->product_qty = 1;
        $product_cart->product_name = $product->product_name;
        $product_cart->product_img = $product->product_img;
        $product_cart->product_price = $product->product_price;
        $product_cart->product_subtotal = $product_cart->product_qty*$product->product_price;
        $product_cart->save();
        
       } else {
        //qty > stock
         if (($product_cart->first()->product_qty + 1) > $product->product_qty) {
            return back()->with('alert', 'You have reached maximum quantity of this item!');
         } else {
            $product_cart->first()->product_qty = $product_cart->first()->product_qty + 1;
            $product_cart->first()->product_subtotal = $product_cart->first()->product_qty * $product->product_price;
            $product_cart->first()->save();
         }
       }

       $total_price = 0;
       foreach($transaction->carts as $cart) {
        $total_price += $cart->product_subtotal;
       }

       $transaction->total_price = $total_price;
       $transaction->save();

       return back()->with('alert', 'Product has succesfully added to cart!');
       
    }

    public function updateCart(Request $request, $id) {
        $transaction = Transaction::all()->where('user_id', 'LIKE', Auth::user()->id)->where('is_finished', 'LIKE', 0)->first();
        $product_cart = ProductCart::findOrFail($id);
        $product = Product::findOrFail($product_cart->product_id);
        if ($request->qty > $product->product_qty) {
            return back()->with('alert', 'You haved entered larger amount! Stock Left : '.$product->product_qty);
        } else if ($request->qty == 0) {
            ProductCart::destroy($id);
        } else {
            $product_cart->product_qty = $request->qty;
            $product_cart->product_subtotal = $request->qty * $product->product_price;
            $product_cart->save();
            $total_price = 0;
            foreach($transaction->carts as $cart) {
             $total_price += $cart->product_subtotal;
            }
            $transaction->total_price = $total_price;
            $transaction->save();
        }

        return back();

    }

    public function checkoutCart(Request $request) {
        $transaction = Transaction::all()->where('user_id', 'LIKE', Auth::user()->id)->where('is_finished', 'LIKE', 0)->first();
        if ($transaction->checkout_token==$request->checkout_token) {
            //kurangin stock
            foreach($transaction->carts as $cart) {
                $product = Product::findOrFail($cart->product_id);
                $product->product_qty -= $cart->product_qty;
                $product->save();
            }
            //set curr transaction finished
            $transaction->is_finished = 1;
            $transaction->transaction_date = Carbon::now();
            //create new later transaction
            $newTransaction = new Transaction();
            $newTransaction->is_finished = 0;
            $newTransaction->total_price = 0;
            $newTransaction->user_id = Auth::user()->id;

            $transaction->save();
            $newTransaction->save();

            return back()->with('alert','Transaction success! You will receive our products soon! Thank you for shopping with us!');
        } else {
            return back()->with('error','Passcode does not match');
        }
    }
}


