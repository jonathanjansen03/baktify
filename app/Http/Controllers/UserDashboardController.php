<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(){
        return view('pages.dashboard-user');
    }
}
