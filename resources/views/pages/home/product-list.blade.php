@extends('layouts.app')

@section('title', 'Our Products')

@section('main-content')
    <div id="product_list_header" class="d-flex justify-content-between">
        <h3 class="text-black font-weight-bold mb-0">OUR PRODUCTS</h3>
        <form action="/products" class="form-inline" method="GET">
            <input type="text" name="product_search" id="product_search" class="form-control mr-3" placeholder="Search product">
            <button type="submit" class="btn purple-btn">Search</button>
            @if(Auth::check() && Auth::user()->role=="admin")
                <button type="button" id="insert_product_btn" class="btn blue-btn ml-3" onclick="location.href='{{ route('view-insert-product') }}'">Insert Product</button>
            @endif
           
        </form>
    </div>

    {{-- kalo product not found --}}

    @if(session()->has('error'))
       <p id="product_not_found_message" class="text-black">{{ session()->get('error') }}</p>
    @else
    <div id="product_list_container" class="row mt-5">
        @foreach ($products as $product)
        <div class="product-container col-md-3 mb-5">
            <div class="product-wrapper gray-shadow text-center py-3">
                <div class="product-info" onclick="location.href='{{ route('product-detail', $product->id)}}'">
                    <img class="rounded-lg" src="{{ asset('storage/image/'.$product->product_img) }}" alt="Product">
                    <div class="text-black font-weight-bold">{{ $product->product_name }}</div>
                    <div>IDR {{ $product->product_price }}</div>
                    <div class="product-category mx-auto rounded-pill text-white mt-2 py-1">{{ $product->category->category_name }}</div>
                </div>
    
                <hr class="mx-auto mb-0">

                @if(Auth::check() && Auth::user()->role=="admin")
                    <div class="product-btns-container text-left d-flex justify-content-between px-3">
                        <button type="submit" class="btn blue-btn rounded-pill" onclick="location.href='{{ route('view-update-product', $product->id) }}'">Edit Product</button>
                        <form action="{{ Route('delete-product', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn red-btn rounded-pill">Remove Product</button>
                        </form>
                    </div>
                @else
                    <form action="{{Route('add-to-cart', $product->id)}}" method="POST">
                        @csrf
                        <div class="product-btns-container text-left d-flex justify-content-between px-3">
                            <button type="submit" class="btn blue-btn rounded-pill">Add to Cart</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
        @endforeach
    </div>
 
    <div class="pagination-container d-flex justify-content-between mt-4">
        <div class="d-flex align-items-center">
            <p class="text-black mb-0">
                Showing <b class="text-black">{{$products->firstItem()}}</b> to <b class="text-black">{{$products->lastItem()}}</b> of <b class="text-black">{{$products->total()}}</b> results
            </p>
        </div>
        <div class="d-flex">
            {{$products->links()}}
        </div>
    </div>
    @endif
@endsection
