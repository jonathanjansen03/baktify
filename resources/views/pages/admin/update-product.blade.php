@extends('layouts.app')

@section('title', 'Update Product')

@section('main-content')
    <h3 id="insert_form_header" class="text-black">{{$product->product_name}}</h3>

    <img class="mx-auto mb-5"src="{{asset('storage/image/'.$product->product_img)}}" width="400" height="400">

    <form action="{{Route('update-product', $product->id)}}" id="insert_form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group row">
            <label for="product_image" class="col-sm-2 col-form-label">Image</label>
            <input type="file" class="form-control-file col-sm-3" id="product_image" name="product_image">
        </div>

        <hr class="gradient-hr">

        <div class="form-group row">
            <label for="product_description" class="col-sm-2 col-form-label">Description</label>
            <textarea class="form-control col-sm-10" id="product_description" name="product_description" required
                autofocus>{{$product->product_description}}</textarea>
        </div>

        <hr class="gradient-hr">

        <div class="form-group row">
            <label for="product_price" class="col-sm-2 col-form-label">Price</label>
            <input type="text" class="form-control col-sm-10" id="product_price" name="product_price" value="{{$product->product_price}}">
        </div>

        <hr class="gradient-hr">

        <div class="form-group row">
            <label for="product_quantity" class="col-sm-2 col-form-label">Product Quantity</label>
            <input type="text" class="form-control col-sm-10" id="product_quantity" name="product_qty" value="{{$product->product_qty}}">
        </div>
        
        <hr class="gradient-hr">

            @error('product_description')
                <div class="text-danger">{{$message}}</div>
            @enderror
            @error('product_price')
                <div class="text-danger">{{$message}}</div>
            @enderror
            @error('product_qty')
                <div class="text-danger">{{$message}}</div>
            @enderror
            @error('category')
                <div class="text-danger">Please Create Category First!</div>
            @enderror

        <div id="insert_cancel_btns_container">
            <button type="submit" class="btn blue-btn">Insert</button>
            <button type="button" class="btn red-btn">Cancel</button>
        </div>

    </form>
@endsection