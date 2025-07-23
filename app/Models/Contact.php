<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\DeleteFile;

class Contact extends Model
{
    use HasFactory, DeleteFile;

    protected $table = 'contact';
    protected $fillable = [
        'template_name',
        'banner_heading',
        'banner_image',
        'banner_image_alt',
        'address',
        'phone',
        'email',
        'description',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'status',
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
        });

        static::updating(function ($about) {

            if ($about->isDirty('banner_image') && $about->getOriginal('banner_image')) {
                $about->deleteFile($about->getOriginal('banner_image'));
            }
        });

        static::saved(function ($about) {
            if ($about->template_name === null) {
                $about->template_name = 'Contact Template ' . $about->id;
                $about->save();
            }
        });
    }

    public function getBannerImageUrlAttribute()
    {
        return asset('storage/contact/' . $this->banner_image);
    }
}
