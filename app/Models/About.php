<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\DeleteFile;

class About extends Model
{
    use HasFactory, DeleteFile;

    protected $table = 'about';
    protected $fillable = [
        'template_name',
        'banner_heading',
        'banner_image',
        'banner_image_alt',
        'heading',
        'description',
        'image',
        'image_alt',
        'mission',
        'vision',
        'our_values',
        'founder_name',
        'founder_professional_title',
        'founder_description',
        'founder_image',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'status'
    ];



    protected $casts = [
        'status' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($about) {

            if ($about->status === null) {
                $about->status = 1;
            }
        });

        static::deleted(function ($about) {

            if ($about->banner_image) {
                $about->deleteFile($about->banner_image);
            }

            if ($about->image) {
                $about->deleteFile($about->image);
            }

            if ($about->founder_image) {
                $about->deleteFile($about->founder_image);
            }
        });

        static::updating(function ($about) {

            if ($about->isDirty('banner_image') && $about->getOriginal('banner_image')) {
                $about->deleteFile($about->getOriginal('banner_image'));
            }

            if ($about->isDirty('image') && $about->getOriginal('image')) {
                $about->deleteFile($about->getOriginal('image'));
            }

            if ($about->isDirty('founder_image') && $about->getOriginal('founder_image')) {
                $about->deleteFile($about->getOriginal('founder_image'));
            }
        });

        static::saved(function ($about) {
            if ($about->template_name === null) {
                $about->template_name = 'About Template ' . $about->id;
                $about->save();
            }
        });
    }

    public function getBannerImageUrlAttribute()
    {
        return asset('storage/about/' . $this->banner_image);
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/about/' . $this->image);
    }

    public function getFounderImageUrlAttribute()
    {
        return asset('storage/about/' . $this->founder_image);
    }
}
