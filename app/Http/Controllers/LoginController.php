<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index(){
        return view('pages.auth.sign-in');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if($request->get('remember-email')){
            Cookie::queue('emailcookie',$request->email, 2628000); // 5 years = 2628000 minutes
        }
        if(!Auth::Attempt($credentials)){
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
