<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCart extends Model
{
    use HasFactory;
    protected $fillable = ['product_qty'];
    
    public function transaction() {
        return $this->belongsTo(Transaction::class);
     }
}
