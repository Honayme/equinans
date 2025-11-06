<?php

namespace App\Livewire;

use App\Models\LegalPage;
use Livewire\Component;

class LegalPageShow extends Component
{
    public LegalPage $page;

    public function mount($slug)
    {
        $this->page = LegalPage::where('slug', $slug)
            ->active()
            ->firstOrFail();

        // Configuration SEO dynamique
        $this->configureSeo();
    }

    protected function configureSeo()
    {
        // Setup SEO de base
        seo()->charset('utf-8');
        seo()->viewport('width=device-width, initial-scale=1');

        // Title
        seo()->title($this->page->meta_title ?? $this->page->title);

        // Description
        if ($this->page->meta_description) {
            seo()->description($this->page->meta_description);
        }

        // Keywords
        if ($this->page->meta_keywords) {
            seo()->meta('keywords', $this->page->meta_keywords);
        }

        // Open Graph
        seo()->og('type', 'website');
        seo()->og('title', $this->page->meta_title ?? $this->page->title);

        if ($this->page->meta_description) {
            seo()->og('description', $this->page->meta_description);
        }

        if ($this->page->og_image) {
            seo()->og('image', $this->page->og_image);
        }

        seo()->og('url', request()->url());

        // Twitter Card
        seo()->twitter('card', 'summary_large_image');
        seo()->twitter('title', $this->page->meta_title ?? $this->page->title);

        if ($this->page->meta_description) {
            seo()->twitter('description', $this->page->meta_description);
        }

        if ($this->page->og_image) {
            seo()->twitter('image', $this->page->og_image);
        }

        // Canonical URL
        seo()->addMany([
            \romanzipp\Seo\Structs\Link::make()->rel('canonical')->href(request()->url()),
        ]);
    }

    public function render()
    {
        return view('livewire.legal-page-show')
            ->layout('layouts.base');
    }
}
