<?php

namespace App\Livewire;

use Livewire\Component;

class ServiceDetail extends Component
{
    public function render()
    {
        return view('livewire.service-detail')
            ->layout('layouts.app');
    }
}
