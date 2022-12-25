@extends('layouts.app')

@section('title', 'Sign In')

@section('main-content')
    <h2 class="text-center text-black font-weight-bold">Sign in to your account</h2>
    <div id="sign_in_form" class="form-group mx-auto">
      <form action="">
        <div class="form-group">
          <label for="login_email" class="text-black">Email address</label>
          <input type="text" name="login_email" id="login_email" class="form-control">
        </div>

        <div class="form-group">
          <label for="login_password" class="text-black">Password</label>
          <input type="password" name="login_password" id="login_password" class="form-control">
        </div>

        <div class="form-check">
          <input type="checkbox" name="remember_email_checkbox" id="remember_email_checkbox" class="form-check-input">
          <label for="" class="form-check-label text-black">Remember email</label>
        </div>

        <button type="submit" class="btn purple-btn">Sign in</button>
        <div id="or_line" class="text-center">
          <span class="text-black">Or</span>
        </div>

        <button type="submit" class="btn btn-light" id="register_btn">Register</button>
      </form>
    </div>
@endsection