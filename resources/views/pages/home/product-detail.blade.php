@extends('layouts.app')

@section('title', 'Product Detail')

@section('main-content')
	<div id="product-detail-container" class="mx-auto mt-5 w-50">
		<div class="text-center">
			<img src="{{ asset('storage/image/'.$product->product_img) }}" alt="Product" class="img-fluid rounded mx-auto gray-shadow mb-4">
		</div>

		<h3 class="text-black text-center">{{$product->product_name}}</h3>
		<p class="mt-3">{{$product->product_description}}</p>
		<p>Stock: {{$product->product_qty}}</p>
		<p>Category: {{$product->category->category_name}}</p>
	</div>
@endsection