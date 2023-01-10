@extends('layouts.app')

@section('title', 'Insert Product')

@section('main-content')
    <h3 id="insert_form_header" class="text-black mb-4">Add New Product</h3>

    <form action="{{ route('insert-product') }}" id="insert_form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row d-flex align-items-center mb-0">
            <label for="product_image" class="col-sm-2 col-form-label">Image</label>
            <input type="file" class="form-control-file col-sm-3" id="product_image" name="product_image">
        </div>

        <hr class="gradient-hr my-4">

        <div class="form-group row d-flex align-items-center mb-0">
            <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
            <input type="text" class="form-control col-sm-10" id="product_name" name="product_name">
        </div>

        <hr class="gradient-hr my-4">

        <div class="form-group row d-flex align-items-center mb-0">
            <label for="product_description" class="col-sm-2 col-form-label">Description</label>
            <textarea class="form-control col-sm-10" id="product_description" name="product_description"></textarea>
        </div>

        <hr class="gradient-hr my-4">

        <div class="form-group row d-flex align-items-center mb-0">
            <label for="product_price" class="col-sm-2 col-form-label">Price</label>
            <input type="text" class="form-control col-sm-10" id="product_price" name="product_price">
        </div>

        <hr class="gradient-hr my-4">

        <div class="form-group row d-flex align-items-center mb-0">
            <label for="product_quantity" class="col-sm-2 col-form-label">Product Quantity</label>
            <input type="text" class="form-control col-sm-10" id="product_quantity" name="product_qty">
        </div>
        
        <hr class="gradient-hr my-4">

        <div class="form-group row d-flex align-items-center mb-0">
            <label for="product_category" class="col-sm-2 col-form-label">Category Name</label>
            <select name="category" class="form-control col-sm-10" id="product_category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <hr class="gradient-hr my-4">
        
        @if ($errors->any())
            <div class="alert alert-danger mt-4">
                @error('product_name')
                    <div class="text-danger">{{$message}}</div>
                @enderror
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
            </div>
        @endif
        
        <div id="insert_cancel_btns_container">
            <button type="submit" class="btn blue-btn mt-4 mr-3 py-2 px-4">Insert</button>
            <button type="button" class="btn red-btn mt-4 mr-3 py-2 px-4">Cancel</button>
        </div>
    </form>
@endsection