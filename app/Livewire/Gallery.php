<?php

namespace App\Livewire;

use App\Models\Gallery as GalleryModel;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        // Cache les images de la galerie pendant 1 heure
        $galleryItems = Cache::remember('gallery_images', 3600, function () {
            return GalleryModel::active()
                ->ordered()
                ->with('media')
                ->get();
        });

        // Récupère toutes les images de tous les items de galerie actifs
        $allImages = collect();
        foreach ($galleryItems as $item) {
            $media = $item->getMedia('gallery_images');
            foreach ($media as $mediaItem) {
                $allImages->push([
                    'url' => $mediaItem->getUrl('large'),
                    'thumbnail' => $mediaItem->getUrl('thumbnail'),
                    'alt' => $mediaItem->getCustomProperty('alt', $item->title ?? 'Centre équestre'),
                    'title' => $item->title,
                ]);
            }
        }

        return view('livewire.gallery', [
            'images' => $allImages,
        ])->layout('layouts.app');
    }
}
