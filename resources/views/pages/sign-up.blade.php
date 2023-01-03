@extends('layouts.app')

@section('title', 'Sign Up')
@section('main-content')
    <h2 class="text-center text-black font-weight-bold">Create your account</h2>
    <div id="sign_up_form" class="form-group mx-auto grey-shadow">
        <form action="{{ Route('register') }}" method="GET">
            <div class="form-group">
                <label for="sign_up_name" class="text-black">Name</label>
                <input type="text" name="name" id="sign_up_name" class="form-control">
                 @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="sign_up_email" class="text-black">Email address</label>
                <input type="text" name="email" id="sign_up_email" class="form-control">
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label for="sign_up_password" class="text-black">Password</label>
                    <input type="password" name="password" id="sign_up_password" class="form-control">
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
                <textarea name="address" id="sign_up_address" class="form-control" aria-describedby="address_desc"></textarea>
                @error('address')
                    <div class="text-danger">
                        {{ $message }}
                     </div>
                @enderror
                <small id="address_desc" class="form-text">Please write your actual address where you can receive mail.</small>
            </div>

            <div class="form-group">
                <label for="sign_up_phone" class="text-black">Phone</label>
                <input type="text" name="phone" id="sign_up_phone" class="form-control">
                @error('phone')
                    <div class="text-danger">
                        {{ $message }}
                     </div>
                @enderror
            </div>

            <button type="submit" id="create_account_btn" class="btn purple-btn">Create Account</button>
        </form>
    </div>
@endsection