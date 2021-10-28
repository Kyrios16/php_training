<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'post';
    protected $fillable = [
        'title',
        'content',
        'author',
        'phone',
        'email',
        'created_at',
        'updated-at',
        'deleted_at'
    ];

    protected $date = [
        'deleted_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
