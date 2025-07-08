<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'code', 'price', 'offer_percentage', 'description', 'main_image', 'gallery_images'];

    protected $casts = [
        'gallery_images' => 'array',
    ];
}
