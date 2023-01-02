@extends('layouts.app')

@section('title', 'Sign In')

@section('main-content')
    <h2 class="text-center text-black font-weight-bold">Sign in to your account</h2>
    <div id="sign_in_form" class="form-group mx-auto grey-shadow">
      <form method="POST" action="{{Route('login')}}" >
        @csrf
        <div class="form-group">
          <label for="login_email" class="text-black">Email address</label>
          <input type="text" name="email" id="login_email" class="form-control" value={{Cookie::get('emailcookie')==null ? "":Cookie::get('emailcookie')}}>
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
          <input type="checkbox" name="remember-email" id="remember_email_checkbox" class="form-check-input" {{Cookie::get('emailcookie')==null?"":"Checked"}}>
          <label for="" class="form-check-label text-black">Remember email</label>
        </div>
        

        <button type="submit" class="btn purple-btn">Sign in</button>
        <div id="or_line" class="text-center">
          <span class="text-black">Or</span>
        </div>
        <button type="button" class="btn btn-light" id="register_btn" onclick="location.href='{{ route('signup') }}'">Register</button>
       
      </form>
     
    </div>
@endsection