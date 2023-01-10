<nav id="guest_navbar" class="navbar navbar-expand-lg navbar-light gray-shadow mb-5">
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
		</ul>
		<form class="form-inline">
			<button type="button" id="sign_in_btn" class="btn pl-0" onclick="location.href='{{ route('signin') }}'">Sign In</button>
			<button type="button" id="sign_up_btn" class="btn purple-btn rounded-pill" onclick="location.href='{{ route('signup') }}'">Sign Up</button>
		</form>
	</div>
</nav>