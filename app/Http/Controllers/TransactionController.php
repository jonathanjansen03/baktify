<?php

namespace App\Http\Controllers;

use App\Model\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function createTransaction(Request $request) {
        $transaction = new Transaction();

        $transaction->user_id = $request->user;
        
        $transaction->save();
    }

    public function updateTransaction(Request $request, $id) {
        $transaction = Transaction::findOrFail($id);
    }
}
