<?php

namespace App\Livewire\Partials;

use App\Models\Service;
use Livewire\Component;

class ServicesCards extends Component
{
    public ?int $limit = null; // null = tous les services

    public function render()
    {
        $query = Service::active()->ordered();

        // Applique la limite si définie
        if ($this->limit) {
            $query->limit($this->limit);
        }

        $services = $query->get();

        return view('livewire.partials.services-cards', [
            'services' => $services
        ]);
    }
}
