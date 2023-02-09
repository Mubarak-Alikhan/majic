<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variant extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'variants';
    protected $fillable = [
        'color_name',
        'status',
        'slug'
    ];
    public function variants()
    {
        return $this->belongsToMany(Product::class, 'variant_products', 'product_id', 'variant_id');
    }
}
