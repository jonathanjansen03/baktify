@extends('layouts.app')

@section('title', 'Insert Product')

@section('main-content')
    <form action="" id="insert_product_form">
        <div class="form-group row">
            <label for="product_image" class="col-sm-2 col-form-label">Image</label>
            <input type="file" class="form-control-file col-sm-3" id="product_image">
        </div>

        <hr class="gradient-hr">

        <div class="form-group row">
            <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
            <input type="text" class="form-control col-sm-10" id="product_name">
        </div>

        <hr class="gradient-hr">

        <div class="form-group row">
            <label for="product_description" class="col-sm-2 col-form-label">Description</label>
            <textarea class="form-control col-sm-10" id="product_description"></textarea>
        </div>

        <hr class="gradient-hr">

        <div class="form-group row">
            <label for="product_quantity" class="col-sm-2 col-form-label">Price</label>
            <input type="text" class="form-control col-sm-10" id="product_quantity">
        </div>

        <hr class="gradient-hr">

        <div class="form-group row">
            <label for="product_quantity" class="col-sm-2 col-form-label">Product Quantity</label>
            <input type="text" class="form-control col-sm-10" id="product_quantity">
        </div>
        
        <hr class="gradient-hr">

        <div class="form-group row">
            <label for="product_category" class="col-sm-2 col-form-label">Category Name</label>
            <select class="form-control col-sm-10" id="product_category">
                <option value="Country">Country</option>
                <option value="Dubstep">Dubstep</option>
                <option value="Electro">Electro</option>
            </select>
        </div>

        <hr class="gradient-hr">

        <div id="insert_cancel_btns_container">
            <button type="submit" class="btn blue-btn">Insert</button>
            <button type="button" class="btn red-btn">Cancel</button>
        </div>
    </form>
@endsection