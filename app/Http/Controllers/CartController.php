<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class CartController extends Controller
{
    public function addToCart($id){
       $cart = ProductCart::all();
       $product_cart = ProductCart::all()->where('product_id', 'LIKE', $id)->where('user_id', 'LIKE', Auth::user()->id);
       $product = Product::findOrFail($id);
       if(count($product_cart)==0){
        $product_cart = new ProductCart();
        $product_cart->product_id = $id;
        $product_cart->user_id = Auth::user()->id;
        $product_cart->product_qty = 1;
        $product_cart->product_name = $product->product_name;
        $product_cart->product_img = $product->product_img;
        $product_cart->product_price = $product->product_price;
        $product_cart->product_subtotal = $product_cart->product_qty*$product->product_price;
        $product_cart->save();
        
       }else{
        //qty > stock
         if(($product_cart->product_qty + 1) > $product->produt_qty){
            return back()->with('alert', 'You have reached maximum quantity of this item!');
         }else{
            $product_cart->product_qty = $product_cart->product_qty + 1;
            $product_cart->product_subtotal = $product_cart->product_qty*$product->product_price;
            $product_cart->save();
         }
       }

       return view('pages.user.cart', compact('cart'));
       
    }
}
