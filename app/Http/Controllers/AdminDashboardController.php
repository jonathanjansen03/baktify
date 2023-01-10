<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function manageProduct() {
        return view('pages.product-list');
    }

    public function insertProduct() {
        $categories = Category::all();
        return view('pages.admin.insert-product', compact('categories'));
    }

    public function insertCategory() {
        $categories = Category::all();
        return view('pages.admin.insert-category',compact('categories'));
    }

    public function editProduct($id) {
        $product = Product::findOrFail($id);
        return view('pages.admin.update-product', compact('product'));
    }

   
}
