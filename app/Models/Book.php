<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = [
        'title',
        'author',
        'description',
        'year',
        'genre',
    ];
}
