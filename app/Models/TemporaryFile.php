<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TemporaryFile extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'temporary_files';
    protected $fillable = [
        'folder',
        'file'
    ];
}
