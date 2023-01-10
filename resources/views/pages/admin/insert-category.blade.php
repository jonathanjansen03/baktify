@extends('layouts.app')

@section('title', 'Add Category')

@section('main-content')
    <div id="existing_categories_list" class="d-flex mb-3">
        @foreach ($categories as $category)
            <p class="text-white rounded-lg mr-3 py-2 px-3">{{$category->category_name}}</p>
        @endforeach
    </div>

    <h3 id="insert_form_header" class="text-black mb-4">Add New Category</h3>

    <form action="{{ route('insert-category') }}" method="POST" id="insert_form">
        @csrf
        <div class="form-group row">
            <label for="product_name" class="col-sm-2 col-form-label">Category Name</label>
            <input type="text" class="form-control col-sm-10" id="product_name" name="category_name">
        </div>

        <div id="insert_cancel_btns_container">
            <button type="submit" class="btn blue-btn">Insert</button>
        </div>
    </form>

    @error('category_name')
        <div class="alert alert-danger mt-4">
           {{$message}}
        </div>
    @enderror
@endsection