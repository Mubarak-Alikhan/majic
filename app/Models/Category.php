<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'catagories';
    protected $fillable = [
        'name',
        'status',
        'slug'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'collection_catagories', 'category_id', 'collection_id');
    }
}
