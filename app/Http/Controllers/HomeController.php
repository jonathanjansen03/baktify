<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewIndex(){
        return view('pages.home.home');
    }

    public function viewAboutUs(){
        return view('pages.home.about-us');
    }

    public function viewProducts(){
        return view('pages.home.product-detail');
    }
}
