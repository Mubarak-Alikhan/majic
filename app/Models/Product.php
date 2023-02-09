<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'image',
        'description',
        'material',
        'selling_price',
        'last_price',
        'status',
        'slug',
    ];
    public function collection()
    {
        return $this->belongsToMany(Collection::class, 'collection_products', 'product_id', 'collection_id');
    }
    public function set()
    {
        return $this->belongsToMany(Set::class, 'set_products', 'product_id', 'set_id');
    }
    public function styles()
    {
        return $this->belongsToMany(Style::class, 'style_products', 'product_id', 'style_id');
    }
    public function variants()
    {
        return $this->belongsToMany(Variant::class, 'variant_products', 'variant_id', 'product_id');
    }
    public function category()
    {
        return $this->BelongsTo(Category::class);
    }
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
    public function wishlists()
    {
        return $this->hasMany(wishlist::class, 'wishlist_id', 'id');
    }
}
