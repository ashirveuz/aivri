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

    protected static function booted()
    {
        static::creating(function ($product) {

            if ($product->status === null) {
                $product->status = 1;
            }

            // If the product doesn't already have a product_code, generate a new one
            if (empty($product->product_code)) {
                $product->product_code = strtoupper(Str::random(10));
            }
        });

        static::deleted(function ($product) {

            // Delete the main image if it exists
            if ($product->main_image) {
                $product->deleteFile($product->main_image);
            }

            // Delete gallery images if they exist
            if ($product->gallery_images) {
                foreach ($product->gallery_images as $image) {
                    $product->deleteFile($image);
                }
            }
        });

        static::updating(function ($product) {
            // Check if main image is being updated and delete the old one
            if ($product->isDirty('main_image') && $product->getOriginal('main_image')) {
                $product->deleteFile($product->getOriginal('main_image'));
            }

            // Check if any gallery image is being updated
            if ($product->isDirty('gallery_images')) {
                $oldImages = $product->getOriginal('gallery_images', []);
                $newImages = $product->gallery_images ?? [];

                // Compare old and new gallery images to find the ones that have been removed
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
