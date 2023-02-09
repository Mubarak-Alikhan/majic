<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Style extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'styles';
    protected $fillable = [
        'name',
        'status',
        'slug'
    ];
    public function products()
    {
        return $this->belongsToMany(Style::class, 'style_products', 'style_id', 'product_id');
    }
}
