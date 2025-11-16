<?php

namespace App\Livewire;

use Livewire\Component;

class OurSchedules extends Component
{
    public function render()
    {
        return view('livewire.our-schedules')
            ->layout('layouts.app');
    }
}
