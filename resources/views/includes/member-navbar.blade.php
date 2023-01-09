<nav id="member_navbar" class="navbar navbar-expand-lg navbar-light mb-5">
	<a class="navbar-brand" href="{{Route('home')}}">
		<img src="{{ asset('images/logo.png') }}" alt="Logo" id="logo">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="mainNavbar" class="collapse navbar-collapse">
		<ul class="navbar-nav mr-auto mx-auto">
			<li class="nav-item">
				<a class="nav-link text-black" href="{{Route('about-us')}}">About us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-black" href="{{Route('product-list')}}">Products</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-black" href="">My Transaction</a>
			</li>
		</ul>
		<form class="form-inline">
			<a href="" class=" nav-link text-black">Cart</a>
			<div id="navbar_profile" class="d-flex flex-column">
				{{-- ini nanti diganti jadi nama member --}}
				<span>member</span>
				<a href="{{ Route('view-profile') }}" class="text-secondary text-decoration-none">View profile</a>
			</div>
		</form>
	</div>
</nav>