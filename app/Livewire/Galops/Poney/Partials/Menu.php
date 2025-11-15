<?php

namespace App\Livewire\Galops\Poney\Partials;

use Livewire\Component;

class Menu extends Component
{
    public $galopActif;
    public $icone;
    public $titre;
    public $description;

    public function render()
    {
        return view('livewire.galops.poney.partials.menu');
    }
}
