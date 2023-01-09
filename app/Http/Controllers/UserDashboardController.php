<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
   public function viewCart(){
    return view('pages.user.cart');
   }

   public function viewCheckOut(){
    return view('pages.user.checkout');
   }

   public function viewTransaction(){
    return view('pages.user.transactions');
   }
}
