<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function manageProduct(){
        return view('pages.product-list');
    }

    public function insertProduct(){
        return view('pages.admin-dashboard.insert-product');
    }

    public function insertCategory(){
        return view('pages.admin-dashboard.insert-category');
    }
}
