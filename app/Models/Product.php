<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
        'images',
    ];

    protected $casts = [
        'images' => 'array', // multiple images
        'price' => 'decimal:2',
    ];
}
