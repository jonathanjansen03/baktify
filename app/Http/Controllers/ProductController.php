<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function productList(Request $request){
        $products = null;
        if($request->has('product_search')){
            $products = Product::where('product_description','LIKE','%'.$request->product_search.'%')->orWhere('product_name','LIKE','%'.$request->product_search.'%')->paginate(12);
            if(count($products)== 0){
                return back()->with('error','No Product Match for '.$request->product_search);
            }
        }else{
            $products = Product::paginate(12);
        }
        return view('pages.home.product-list', compact('products'));
    }

    public function createProduct(Request $request){
        $validator = Validator::make($request->all(), [
            'product_image' => 'required|mimes:jpg,png,jpeg',
        ]);
 
        if ($validator->fails()) {
            $message = $validator->errors()->first();
            return redirect()->back()->with('alert',$message);
        }
        
        $request->validate([
            'product_name' => 'required|min:5',
            'product_description' => 'required|min:15|max:500',
            'product_price'=>'required|numeric|min:1000|max:10000000',
            'product_qty'=>'required|numeric|min:1|max:10000',
            'category' =>'required'
        ]);

        $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('product_image')->getClientOriginalExtension();
        $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
        $path = $request->file('product_image')->storeAs('public/image', $fileNameToStore);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;
        $product->product_qty = $request->product_qty;
        $product->category_id = $request->category;
        $product->product_img = $fileNameToStore;
       // dd($product);
        $product->save();

        return redirect(route('product-list'))->with('alert', 'Product Succesfully Inserted!');
        
    }

    public function updateProduct(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'product_image' => 'required|mimes:jpg,png,jpeg',
        ]);
 
        if ($validator->fails()) {
            $message = $validator->errors()->first();
            return redirect()->back()->with('alert',$message);
        }
        
        $request->validate([
            'product_description' => 'required|min:15|max:500',
            'product_price'=>'required|numeric|min:1000|max:10000000',
            'product_qty'=>'required|numeric|min:1|max:10000',
        ]);
        $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('product_image')->getClientOriginalExtension();
        $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
        $path = $request->file('product_image')->storeAs('public/image', $fileNameToStore);

        //dd($fileNameToStore);
       $product = Product::findOrFail($id);
       $product->product_description = $request->product_description;
       $product->product_img = $fileNameToStore;
       $product->product_qty = $request->product_qty;
       $product->product_price = $request->product_price;
       $product->save();

        return redirect('/products');
    }

    public function deleteProduct($id){
        Product::destroy($id);
        return back()->with('alert', 'Success remove product');
    }
}
