<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\DeleteFile;

class Home extends Model
{
    use HasFactory, DeleteFile;

    protected $table = 'home';
    protected $fillable = [
        'banner_title',
        'banner_description',
        'banner_images',
        'image_alt',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'status'
    ];



    protected $casts = [
        'banner_images' => 'array',
        'status' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($home) {

            if ($home->status === null) {
                $home->status = 1;
            }
        });

        static::deleted(function ($home) {

            if ($home->banner_images) {
                foreach ($home->banner_images as $image) {
                    $home->deleteFile($image);
                }
            }
        });

        static::updating(function ($home) {

            if ($home->isDirty('banner_images') && $home->getOriginal('banner_images')) {
                $oldImages = $home->getOriginal('banner_images', []);
                $newImages = $home->banner_images ?? [];

                $removedImages = array_diff($oldImages, $newImages);
                foreach ($removedImages as $removedImage) {
                    $home->deleteFile($removedImage);
                }
            }
        });

        static::saved(function ($home) {
            if ($home->template_name === null) {
                $home->template_name = 'Home Template ' . $home->id;
                $home->save();
            }
        });
    }

    public function getBannerImageUrlsAttribute()
    {
        return array_map(function ($image) {
            return asset('storage/home/' . $image);
        }, $this->banner_images);
    }
}
