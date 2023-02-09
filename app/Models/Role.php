<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'roles';
    protected $fillable = [
        'title',
        'slug',
        'status'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_role', 'user_id', 'role_id');
    }
}
