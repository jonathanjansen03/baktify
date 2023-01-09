<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCart;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class CartController extends Controller
{
    public function addToCart($id){
       
       $product_cart = ProductCart::all()->where('product_id', 'LIKE', $id)->where('user_id', 'LIKE', Auth::user()->id);
       $product = Product::findOrFail($id);
       $currTransaction = Transaction::all()->where('user_id', 'LIKE', Auth::user()->id)->where('is_finished', 'LIKE', 0)->first();

       if(count($product_cart)==0){
        $product_cart = new ProductCart();$transaction = Transaction::all()->where('user_id', 'LIKE', Auth::user()->id)->where('is_finished', 'LIKE', 0)->first();
        $product_cart->product_id = $id;
        $product_cart->transaction_id = $currTransaction->id;
        $product_cart->user_id = Auth::user()->id;
        $product_cart->product_qty = 1;
        $product_cart->product_name = $product->product_name;
        $product_cart->product_img = $product->product_img;
        $product_cart->product_price = $product->product_price;
        $product_cart->product_subtotal = $product_cart->product_qty*$product->product_price;
        $product_cart->save();
        
       }else{
        //qty > stock
         if(($product_cart->first()->product_qty + 1) > $product->product_qty){

            return back()->with('alert', 'You have reached maximum quantity of this item!');
         }else{
            $product_cart->first()->product_qty = $product_cart->first()->product_qty + 1;
            $product_cart->first()->product_subtotal = $product_cart->first()->product_qty * $product->product_price;
            $product_cart->first()->save();
         }
       }

       return view('pages.user.cart', compact('transaction'));
       
    }

    public function updateCart(Request $request, $id){
        
        $product_cart = ProductCart::findOrFail($id);
        $product = Product::findOrFail($product_cart->product_id);
        if($request->qty > $product->product_qty){
            return back()->with('alert', 'You haved entered larger amount! Stock Left : '.$product->product_qty);
        }else if($request->qty==0){
            ProductCart::destroy($id);
        }else{
            $product_cart->product_qty = $request->qty;
            $product_cart->product_subtotal = $request->qty * $product->product_price;
            $product_cart->save();
        }
        return back();

    }

    public function checkoutCart(Request $request){
        $transaction = Transaction::all()->where('user_id', 'LIKE', Auth::user()->id)->where('is_finished', 'LIKE', 0)->first();
        if($transaction->checkout_token==$request->checkout_token){
            return back()->with('alert','Transaction success! You will receive our products soon! Thank you for shopping with us!');
        }else{
            return back()->with('error','Passcode does not match');
        }
    }
}


