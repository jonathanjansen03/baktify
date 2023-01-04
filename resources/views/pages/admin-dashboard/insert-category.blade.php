@extends('layouts.app')

@section('title', 'Add Category')

@section('main-content')
    <div id="existing_categories_list">
        <p>Country</p>
        <p>Dubstep</p>
        <p>Electro</p>
    </div>

    <h3 id="insert_form_header" class="text-black">Add New Category</h3>

    <form action="" id="insert_form">
        <div class="form-group row">
            <label for="product_name" class="col-sm-2 col-form-label">Category Name</label>
            <input type="text" class="form-control col-sm-10" id="product_name">
        </div>

        <div id="insert_cancel_btns_container">
            <button type="submit" class="btn blue-btn">Insert</button>
            <button type="button" class="btn red-btn">Cancel</button>
        </div>
    </form>
@endsection