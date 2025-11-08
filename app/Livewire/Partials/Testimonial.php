<?php

namespace App\Livewire\Partials;

use App\Models\Testimonial as TestimonialModel;
use Livewire\Component;

class Testimonial extends Component
{
    public function render()
    {
        // 2. Récupérer les témoignages de la base de données
        $testimonials = TestimonialModel::all();

        // 3. Passer les données à la vue
        return view('livewire.partials.testimonial', [
            'testimonials' => $testimonials
        ]);
    }
}
