<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Set extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'sets';
    protected $fillable = [
        'name',
        'slug',
        'status',
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'set_products', 'set_id', 'product_id');
    }
}
