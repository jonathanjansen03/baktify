@extends('layouts.app')

{{-- yang ini boleh diganti jadi nama user, atau User Profile aja gpp jg --}}
@section('title', 'User Profile')

@section('main-content')
    <h3 class="text-black text-center">Your Profile</h3>

    <form action="" id="user_profile_container" class="grey-shadow mx-auto">
		<fieldset disabled>
			<div class="form-group">
				<label for="user_name">Name</label>
				<input type="text" name="user_name" id="user_name" class="form-control" value="{{ Auth::user()->name }}">
			</div>
			
			<div class="form-group">
				<label for="user_email">Email Address</label>
				<input type="text" name="user_email" id="user_email" class="form-control" value="{{ Auth::user()->email }}">
			</div>

			{{-- kalo di soal disuruhnya itu dummy password, ga ngerti maksudnya itu harus random tiap kali reload atau semuanya pake fake password yang sama --}}
			<div class="form-group">
				<label for="user_password">Password</label>
				<input type="password" name="" id="user_password" class="form-control" value="dummypassword">
			</div>

			<div class="form-group">
				<label for="user_address">Address</label>
				<textarea name="user_address" id="user_address" class="form-control" autofocus>{{ Auth::user()->address }}</textarea>
				<small id="address_desc" class="form-text">Please write your actual address where you can receive mail.</small>
			</div>

			<div class="form-group">
				<label for="user_phone">Phone</label>
				<input type="text" name="" id="user_phone" class="form-control" value="{{ Auth::user()->phone }}">
			</div>
		</fieldset>
		
		<div id="profile_btns_container">
			<button type="button" class="btn purple-btn">Update</button>
			<button type="button" class="btn red-btn" onclick="location.href='{{ route('logout') }}'">Sign Out</button>
		</div>
    </form>
@endsection