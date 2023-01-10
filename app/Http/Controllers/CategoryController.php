<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class CategoryController extends Controller
{
   public function createCategory(Request $request) {
      $request->validate(['category_name' => 'required|unique:categories|alpha']);
      $category = new Category();
      $category->category_name = $request->category_name;
      $category->save();
      return redirect()->back()->with('alert', 'Category Successfully Created!');
   }

   
}
