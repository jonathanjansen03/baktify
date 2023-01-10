<nav id="member_navbar" class="navbar navbar-expand-lg navbar-light gray-shadow mb-5">
	<a class="navbar-brand" href="{{ route('home')}}">
		<img src="{{ asset('images/logo.png') }}" alt="Logo" id="logo">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="mainNavbar" class="collapse navbar-collapse">
		<ul class="navbar-nav mr-auto mx-auto">
			<li class="nav-item">
				<a class="nav-link text-black" href="{{ route('about-us')}}">About us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-black" href="{{ route('product-list')}}">Products</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-black" href="{{ route('view-transaction')}}">My Transactions</a>
			</li>
		</ul>
		<form class="form-inline">
			<a href="{{ route('view-cart')}}" class=" nav-link text-black">Cart</a>
			<div id="navbar_profile" class="d-flex flex-column">
				<span>member</span>
				<a href="{{ route('view-profile') }}" class="text-secondary text-decoration-none">View profile</a>
			</div>
		</form>
	</div>
</nav>