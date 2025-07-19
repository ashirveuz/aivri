<?php

namespace App\Models;

use App\Traits\DeleteFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, DeleteFile;

    protected $fillable = [
        'name',
        'code',
        'product_code',
        'description',
        'price',
        'currency',
        'currency_symbol',
        'offer_percentage',
        'stock',
        'key_features',
        'specifications',
        'color',
        'size',
        'featured_image',
        'additional_images',
        'status',
    ];

    protected $casts = [
        'additional_images' => 'array',
        'status' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($product) {

            if ($product->status === null) {
                $product->status = 1;
            }

            if (empty($product->product_code)) {
                $product->product_code = strtoupper(Str::random(10));
            }
        });

        static::deleted(function ($product) {

            if ($product->featured_image) {
                $product->deleteFile($product->featured_image);
            }

            if ($product->additional_images) {
                foreach ($product->additional_images as $image) {
                    $product->deleteFile($image);
                }
            }
        });

        static::updating(function ($product) {
            if ($product->isDirty('featured_image') && $product->getOriginal('featured_image')) {
                $product->deleteFile($product->getOriginal('featured_image'));
            }

            if ($product->isDirty('additional_images') && $product->getOriginal('additional_images')) {
                $oldImages = $product->getOriginal('additional_images', []);
                $newImages = $product->additional_images ?? [];

                $removedImages = array_diff($oldImages, $newImages);
                foreach ($removedImages as $removedImage) {
                    $product->deleteFile($removedImage);
                }
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
        return asset('storage/products/main/' . $this->featured_image);
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
        }, $this->additional_images);
    }

    public function getCurrentPriceAttribute()
    {
        if ($this->offer_percentage && $this->offer_percentage > 0 && $this->offer_percentage < 100) {
            return $this->price * (1 - $this->offer_percentage / 100);
        }
        return $this->price;
    }
}
