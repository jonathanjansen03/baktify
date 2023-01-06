@extends('layouts.app')

@section('title', 'Update Profile')

@section('main-content')
	<h3 class="text-black text-center">Update Profile</h3>

	<form action="" id="user_profile_container" class="grey-shadow mx-auto">
		<div class="form-group">
			<label for="sign_up_name" class="text-black">Name</label>
			<input type="text" name="name" id="sign_up_name" class="form-control" value="name">
			 @error('name')
				<div class="text-danger">
					{{ $message }}
				</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="sign_up_email" class="text-black">Email address</label>
			<input type="text" name="email" id="sign_up_email" class="form-control" value="email">
			@error('email')
				<div class="text-danger">
					{{ $message }}
				</div>
			@enderror
		</div>

		<div class="form-row">
			<div class="form-group col">
				{{-- kalo di soal disuruhnya itu dummy password, ga ngerti maksudnya itu harus random tiap kali reload atau semuanya pake fake password yang sama --}}
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
			<textarea name="address" id="sign_up_address" class="form-control" aria-describedby="address_desc">address</textarea>
			@error('address')
				<div class="text-danger">
					{{ $message }}
				 </div>
			@enderror
			<small id="address_desc" class="form-text">Please write your actual address where you can receive mail.</small>
		</div>

		<div class="form-group">
			<label for="sign_up_phone" class="text-black">Phone</label>
			<input type="text" name="phone" id="sign_up_phone" class="form-control" value="phone">
			@error('phone')
				<div class="text-danger">
					{{ $message }}
				 </div>
			@enderror
		</div>
		
		<div id="profile_btns_container">
			<button type="button" class="btn purple-btn">Save</button>
			<button type="button" class="btn purple-btn" onclick="location.href='{{ route('logout') }}'">Cancel</button>
		</div>
	</form>
@endsection