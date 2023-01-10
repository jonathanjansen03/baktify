@extends('layouts.app')

@section('title', 'Sign In')

@section('main-content')
    <h2 class="text-center text-black font-weight-bold">Sign in to your account</h2>
    <div id="sign_in_form" class="form-group mx-auto gray-shadow rounded-lg p-4 mt-4 mb-5">
        <form method="POST" action="{{ route('login')}}" >
            @csrf
            <div class="form-group">
                <label for="login_email" class="text-black">Email address</label>
                <input type="text" name="email" id="login_email" class="form-control" value={{ Cookie::get('emailcookie') == null ? "" : Cookie::get('emailcookie') }}>
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="login_password" class="text-black">Password</label>
                <input type="password" name="password" id="login_password" class="form-control">
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-check">
                <input type="checkbox" name="remember-email" id="remember_email_checkbox" class="form-check-input" {{ Cookie::get('emailcookie') == null ? "" : "Checked" }}>
                <label for="" class="form-check-label text-black">Remember email</label>
            </div>
            
            <button type="submit" class="btn purple-btn w-100 my-3">Sign in</button>

            <div id="or_line" class="text-center w-100 my-3 border-bottom border-dark">
                <span class="text-black w-100 px-3 bg-white">Or</span>
            </div>
            
            <button type="button" class="btn btn-light w-100 my-3 text-secondary border border-secondary" id="register_btn" onclick="location.href='{{ route('signup') }}'">Register</button>
        </form>
    </div>
@endsection