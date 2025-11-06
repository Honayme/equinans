<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LegalPage extends Model
{
    protected $fillable = [
        'type',
        'title',
        'slug',
        'content',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',
        'updated_by',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Auto-generate slug
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            if (empty($page->slug)) {
                $page->slug = Str::slug($page->title);
            }
        });
    }

    // Scope
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Route key
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relations
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    // SEO Helper - utilise meta_title si défini, sinon title
    public function getMetaTitleAttribute($value)
    {
        return $value ?? $this->attributes['title'];
    }
}
