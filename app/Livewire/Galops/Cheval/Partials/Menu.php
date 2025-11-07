<?php

namespace App\Livewire\Galops\Cheval\Partials;

use Livewire\Component;

class Menu extends Component
{
    public function render()
    {
        return view('livewire.galops.cheval.partials.menu')
            ->layout('layouts.app');
    }
}
