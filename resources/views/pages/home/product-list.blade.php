@extends('layouts.app')

@section('title', 'Our Products')

@section('main-content')
    <div id="product_list_header">
        <h3 class="text-black font-weight-bold">OUR PRODUCTS</h3>
        <form action="/products" class="form-inline" method="GET">
            <input type="text" name="product_search" id="product_search" class="form-control" placeholder="Search product">
            <button type="submit" class="btn purple-btn">Search</button>
            @if(Auth::check() && Auth::user()->role=="admin")
                <button type="button" id="insert_product_btn" class="btn blue-btn" onclick="location.href='{{ route('view-insert-product') }}'">Insert Product</button>
            @endif
        </form>
    </div>

    {{-- kalo product not found --}}

    @if(session()->has('error'))
       <p id="product_not_found_message" class="text-black">{{ session()->get('error') }}</p>
    @else
    <div id="product_list_container">
        @foreach ($products as $product)
        <div class="product-container">
            <div class="product-wrapper grey-shadow text-center">
                <div class="product-info" onclick="location.href='{{ route('product-detail') }}'">
                    <img src="{{asset('storage/image/'.$product->product_img)}}" alt="Product">
                    <div class="text-black font-weight-bold">{{$product->product_name}}</div>
                    <div>IDR {{$product->product_price}}</div>
                    <div class="product-category mx-auto">{{$product->category->category_name}}</div>
                </div>
    
                <hr class="mx-auto">

                @if(Auth::check() && Auth::user()->role=="admin")
                    <div class="product-btns-container text-left">
                        <button type="submit" class="btn blue-btn" onclick="location.href='{{ route('view-update-product', $product->id) }}'">Edit Product</button>
                        <form action="{{Route('delete-product', $product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn red-btn">Remove Product</button>
                        </form>
                    </div>
                @else
                    <div class="product-btns-container text-left">
                        <button type="button" class="btn blue-btn">Add to Cart</button>
                    </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
 
    <div class="pagination-container">
        <div class="pagination-results">
            <p class="text-black">
                Showing <b class="text-black">{{$products->firstItem()}}</b> to <b class="text-black">{{$products->lastItem()}}</b> of <b class="text-black">{{$products->total()}}</b> results
            </p>
        </div>
        <div class="pages-btn">
            {{$products->links()}}
        </div>
    </div>
    @endif
@endsection
