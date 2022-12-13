@extends('layouts.app')

{{-- nanti title diganti jadi judul lagu --}}
@section('title', 'Product Detail')

@section('main-content')
	<div id="product-detail-container" class="mx-auto">
		<div class="text-center">
			<img src="https://images.squarespace-cdn.com/content/v1/565c1ab5e4b05079e4bfa169/1594354844764-AS3MIE2RV9MAWWFK4RHA/Shania+Twain+Come+On+Over+Album+Cover+International+Version.jpg" alt="" class="img-fluid rounded mx-auto">
		</div>

		<h3 class="text-black text-center">Come on Over</h3>
		<p>Come on Over the third studio album recorded by Canadian country music singer Shania Twain.</p>
		<p>Stock: 250</p>
		<p>Category: Country</p>
	</div>
@endsection