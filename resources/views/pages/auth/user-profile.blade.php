@extends('layouts.app')

@section('title', 'User Profile')

@section('main-content')
    <h3 class="text-black text-center">Your Profile</h3>

    <form action="" id="user_profile_container" class="gray-shadow mx-auto w-50 p-4 mt-3 rounded-lg">
		<fieldset disabled>
			<div class="form-group">
				<label for="user_name">Name</label>
				<input type="text" name="user_name" id="user_name" class="form-control" value="{{ Auth::user()->name }}">
			</div>
			
			<div class="form-group">
				<label for="user_email">Email Address</label>
				<input type="text" name="user_email" id="user_email" class="form-control" value="{{ Auth::user()->email }}">
			</div>
			
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
			<button type="button" class="btn purple-btn mt-2 mr-2" onclick="location.href='{{ route('view-update-profile') }}'">Update</button>
			<button type="button" class="btn red-btn mt-2 mr-2" onclick="location.href='{{ route('logout') }}'">Sign Out</button>
		</div>
    </form>
@endsection