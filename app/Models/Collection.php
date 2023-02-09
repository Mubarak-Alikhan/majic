<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'collections';
    protected $fillable = [
        'name',
        'status',
        'slug'
    ];

    public function catagories()
    {
        return $this->belongsToMany(Category::class, 'collection_catagories', 'collection_id', 'category_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'collection_products', 'collection_id', 'product_id');
    }
}
