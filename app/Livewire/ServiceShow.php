<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceShow extends Component
{
    public Service $service;
    public $allServices;

    public function mount($slug)
    {
        $this->service = Service::where('slug', $slug)
            ->active()
            ->firstOrFail();


        // Charger tous les services pour la sidebar
        $this->allServices = Service::active()->ordered()->get();

        // Configuration SEO dynamique
        $this->configureSeo();
    }

    protected function configureSeo()
    {
        // Setup SEO de base
        seo()->charset('utf-8');
        seo()->viewport('width=device-width, initial-scale=1');

        // Title
        seo()->title($this->service->title . ' - Centre Équestre Equinans');

        // Description
        if ($this->service->introduction) {
            seo()->description($this->service->introduction);
        }

        // Open Graph
        seo()->og('type', 'website');
        seo()->og('title', $this->service->title . ' - Centre Équestre Equinans');

        if ($this->service->introduction) {
            seo()->og('description', $this->service->introduction);
        }

        seo()->og('url', request()->url());

        // Twitter Card
        seo()->twitter('card', 'summary_large_image');
        seo()->twitter('title', $this->service->title . ' - Centre Équestre Equinans');

        if ($this->service->introduction) {
            seo()->twitter('description', $this->service->introduction);
        }

        // Canonical URL
        seo()->addMany([
            \romanzipp\Seo\Structs\Link::make()->rel('canonical')->href(request()->url()),
        ]);
    }

    public function render()
    {
        return view('livewire.service-show')
            ->layout('layouts.app');
    }
}
