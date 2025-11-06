<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        $services = Service::active()->ordered()->get();

        return view('livewire.services', [
            'services' => $services
        ])->layout('layouts.app');
    }
}
