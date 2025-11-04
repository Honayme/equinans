<?php

namespace App\Livewire;

use Livewire\Component;

class Birthday extends Component
{
    public function render()
    {
        return view('livewire.birthday')
            ->layout('layouts.app');
    }
}
