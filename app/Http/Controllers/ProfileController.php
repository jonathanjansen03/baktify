<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function viewProfile() {
        return view('pages.auth.user-profile');
    }

    public function viewUpdateProfile() {
        return view('pages.auth.update-profile');
    }

    public function updateProfile(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'password' => 'required|confirmed|min:8',
            'address' => 'required|min:15',
            'phone' => 'required|min:11|numeric'
        ]);

        $user = User::findOrFail(Auth::user()->id);

        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();

        return redirect('/user/profile')->with('alert', "Success Update Profile");
    }
}
