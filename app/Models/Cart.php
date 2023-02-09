<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'carts';

    protected $fillable = [
        'product_name',
        'quantity',
        'amount'

    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'prod_id', 'id');
    }
}
