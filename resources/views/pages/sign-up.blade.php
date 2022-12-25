@extends('layouts.app')

@section('title', 'Sign Up')
@section('main-content')
    <h2 class="text-center text-black font-weight-bold">Create your account</h2>
    <div id="sign_up_form" class="form-group mx-auto">
        <form action="">
            <div class="form-group">
                <label for="sign_up_name" class="text-black">Name</label>
                <input type="text" name="sign_up_name" id="sign_up_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="sign_up_email" class="text-black">Email address</label>
                <input type="text" name="sign_up_email" id="sign_up_email" class="form-control">
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label for="sign_up_password" class="text-black">Password</label>
                    <input type="password" name="sign_up_password" id="sign_up_password" class="form-control">
                </div>

                <div class="form-group col">
                    <label for="sign_up_confirm_password" class="text-black">Confirm Password</label>
                    <input type="password" name="sign_up_confirm_password" id="sign_up_confirm_password" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="sign_up_address" class="text-black">Address</label>
                <textarea name="sign_up_address" id="sign_up_address" class="form-control" aria-describedby="address_desc"></textarea>
                <small id="address_desc" class="form-text">Please write your actual address where you can receive mail.</small>
            </div>

            <div class="form-group">
                <label for="sign_up_phone" class="text-black">Phone</label>
                <input type="text" name="sign_up_phone" id="sign_up_phone" class="form-control">
            </div>

            <button type="submit" id="create_account_btn" class="btn purple-btn">Create Account</button>
        </form>
    </div>
@endsection