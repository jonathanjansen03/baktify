<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('pages.auth.sign-up');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'address' => 'required|min:15',
            'phone' => 'required|min:11|numeric'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role = "member";

        $user->save();

        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->is_finished = false;
        $transaction->total_price = 0;

        $transaction->save();

        return redirect('/sign-in')->with('alert', "Register Successful!");

    }
}
