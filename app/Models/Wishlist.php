<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wishlist extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'wishlists';
    protected $fillable = [
        'product_id',
        'user_id'
    ];
    // public static function countWishlist($product_id)
    // {
    //     $countWishlist = Wishlist::where(['user_id => Auth::user_id', 'product_id' => $product_id])
    //         ->count();
    //     return $countWishlist;
    // }
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
