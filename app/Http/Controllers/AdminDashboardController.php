<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function manageProduct(){
        return view('pages.product-list');
    }

    public function insertProduct(){
        return view('pages.admin.insert-product');
    }

    public function insertCategory(){
        $categories = Category::all();
        return view('pages.admin.insert-category',compact('categories'));
    }

   
}
