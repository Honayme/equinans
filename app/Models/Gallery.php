<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Enums\CropPosition;

class Gallery extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['title', 'is_active', 'order'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery_images')
            ->useDisk('public')
            ->useFallbackUrl(asset('storage/images/placeholder.jpg'))
            ->useFallbackPath(public_path('storage/images/placeholder.jpg'));
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumbnail')
            ->crop(400, 300, CropPosition::Center)
            ->sharpen(10);

        $this->addMediaConversion('large')
            ->crop(1600, 1200, CropPosition::Center)
            ->sharpen(10);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
