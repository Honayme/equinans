<?php

namespace App\Livewire\Schedules;

use Livewire\Component;

class Programmes extends Component
{
    public function render()
    {
        return view('livewire.schedules.programmes')
            ->layout('layouts.app');
    }
}
