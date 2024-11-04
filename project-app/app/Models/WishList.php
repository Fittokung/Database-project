<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_name',
        'price',
        'category_id',
        'customer_id',
    ];

    // public function customer()
    // {
    //     return $this->belongsTo(Customer::class);
    // }
}
