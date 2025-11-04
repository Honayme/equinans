<?php

namespace App\Livewire\Partials;

use App\Models\Gallery;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class GallerySlider extends Component
{
    public function render()
    {
        // Cache les images de la galerie pendant 1 heure
        $galleryItems = Cache::remember('gallery_images', 3600, function () {
            return Gallery::active()
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

        // Divise les images en 2 groupes pour le double scrolling
        $midpoint = ceil($allImages->count() / 2);
        $firstRow = $allImages->slice(0, $midpoint);
        $secondRow = $allImages->slice($midpoint);

        return view('livewire.partials.gallery-slider', [
            'firstRow' => $firstRow,
            'secondRow' => $secondRow,
        ]);
    }
}
