<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
   private function generateToken($length){
         $key = '';
         $keys = array_merge(range(0, 9), range('a', 'z'));
     
         for ($i = 0; $i < $length; $i++) {
             $key .= $keys[array_rand($keys)];
         }
     
         return $key;
   }
   public function viewCart(){
    $transaction = Transaction::all()->where('user_id', 'LIKE', Auth::user()->id)->where('is_finished', 'LIKE', 0)->first();
    return view('pages.user.cart', compact('transaction'));
   }

   public function viewCheckOut(){   
      $transaction = Transaction::all()->where('user_id', 'LIKE', Auth::user()->id)->where('is_finished', 'LIKE', 0)->first(); 
      $transaction->checkout_token = $this->generateToken(6);
      $transaction->save();
    return view('pages.user.checkout', compact('transaction'));
   }

   public function viewTransaction(){
      $transactions = Transaction::all()->where('user_id', 'LIKE', Auth::user()->id)->where('is_finished', 'LIKE', 1); 
    return view('pages.user.transactions', compact('transactions'));
   }
}
