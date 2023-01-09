<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'product_description', 'product_qty', 'product_price'];

    public function category() {
       return $this->belongsTo(Category::class);
    }

    public function transactions() {
        return $this->belongsToMany(Transaction::class, 'product_transactions', 'product_id', 'transaction_id');
    }
}
