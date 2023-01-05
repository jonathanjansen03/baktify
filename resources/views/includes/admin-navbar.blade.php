<nav id="admin_navbar" class="navbar navbar-expand-lg navbar-light">
	<a class="navbar-brand" href="{{Route('home')}}">
		<img src="{{ asset('images/logo.png') }}" alt="logo" id="logo">
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
				<a class="nav-link text-black" href="{{Route('product-list')}}">Manage Products</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-black" href="{{Route('view-insert-category')}}">Add Category</a>
			</li>
		</ul>
		<form class="form-inline">
			<div id="navbar_profile">
				<span>admin</span>
				<a href="{{Route('view-profile', Auth::user()->id)}}">View profile</a>
			</div>
		</form>
	</div>
</nav>