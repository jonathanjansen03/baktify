<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('pages.sign-in');
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

        if(!Auth::Attempt($credentials, $request->rememberme)){
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }
        return redirect('/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/sign-in');
    }
}
