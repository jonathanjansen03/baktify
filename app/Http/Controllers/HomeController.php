<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewIndex(){
        return view('pages.home');
    }

    public function viewAboutUs(){
        return view('pages.about-us');
    }

    public function viewProducts(){
        return view('pages.product-detail');
    }
}
