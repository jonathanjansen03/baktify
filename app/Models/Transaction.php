<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_date'
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'product_transactions', 'transaction_id', 'product_id');
    }
}
