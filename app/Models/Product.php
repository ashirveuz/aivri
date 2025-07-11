<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'product_code',
        'description',
        'price',
        'offer_percentage',
        'stock',
        'key_features',
        'specifications',
        'color',
        'size',
        'main_image',
        'gallery_images',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'status' => 'boolean',
    ];

    // Automatically set status to 1 (active) when creating a new product
    protected static function booted()
    {
        static::creating(function ($product) {
            // Set default 'status' to 1 (active) if not explicitly set
            if ($product->status === null) {
                $product->status = 1;
            }

            // If the product doesn't already have a product_code, generate a new one
            if (empty($product->product_code)) {
                $product->product_code = strtoupper(Str::random(10)); // Generates a unique 10-character string
            }
        });
    }

    /**
     * Get the URL to the main image.
     *
     * @return string
     */
    public function getMainImageUrlAttribute()
    {
        return asset('storage/products/main/' . $this->main_image);
    }

    /**
     * Get the URLs to the gallery images.
     *
     * @return array
     */
    public function getGalleryImageUrlsAttribute()
    {
        return array_map(function ($image) {
            return asset('storage/products/gallery/' . $image);
        }, $this->gallery_images);
    }
}
