@extends('layouts.app')

@section('title', 'Update Profile')

@section('main-content')
	<h3 class="text-black text-center">Update Profile</h3>

	<form action="{{ route('update-profile') }}" id="user_profile_container" class="gray-shadow mx-auto w-50 p-4 mt-3 rounded-lg" method="POST">
		@csrf
		@method('patch')
		<div class="form-group">
			<label for="sign_up_name" class="text-black">Name</label>
			<input type="text" name="name" id="sign_up_name" class="form-control" value="{{ Auth::user()->name }}">
			 @error('name')
				<div class="text-danger">
					{{ $message }}
				</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="sign_up_email" class="text-black">Email address</label>
			<input type="text" name="email" id="sign_up_email" class="form-control" value="{{ Auth::user()->email }}" readonly>
			@error('email')
				<div class="text-danger">
					{{ $message }}
				</div>
			@enderror
		</div>

		<div class="form-row">
			<div class="form-group col">
				<label for="sign_up_password" class="text-black">Password</label>
				<input type="password" name="password" id="sign_up_password" class="form-control" value="dummypassword">
				@error('password')
					<div class="text-danger">
						{{ $message }}
					</div>
				@enderror
			</div>

			<div class="form-group col">
				<label for="sign_up_confirm_password" class="text-black">Confirm Password</label>
				<input type="password" name="password_confirmation" id="sign_up_confirm_password" class="form-control">
				@error('password_confirmation')
				<div class="text-danger">
					{{ $message }}
				</div>
			@enderror
			</div>
		</div>

		<div class="form-group">
			<label for="sign_up_address" class="text-black">Address</label>
			<textarea name="address" id="sign_up_address" class="form-control" aria-describedby="address_desc">{{Auth::user()->address}}</textarea>
			@error('address')
				<div class="text-danger">
					{{ $message }}
				 </div>
			@enderror
			<small id="address_desc" class="form-text">Please write your actual address where you can receive mail.</small>
		</div>

		<div class="form-group">
			<label for="sign_up_phone" class="text-black">Phone</label>
			<input type="text" name="phone" id="sign_up_phone" class="form-control" value="{{Auth::user()->phone}}">
			@error('phone')
				<div class="text-danger">
					{{ $message }}
				 </div>
			@enderror
		</div>
		
		<div id="profile_btns_container">
			<button type="submit" class="btn purple-btn">Save</button>
			<button type="button" class="btn red-btn" onclick="location.href='{{ route('view-profile') }}'">Cancel</button>
		</div>
	</form>
@endsection