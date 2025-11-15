<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class InvitationAnniversaire extends Component
{
    #[Validate('required|string|max:255')]
    public $nom = '';

    #[Validate('required|string|max:255')]
    public $prenom = '';

    #[Validate('required|integer|min:3|max:18')]
    public $age = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|string|max:20')]
    public $telephone = '';

    #[Validate('required|string|max:255')]
    public $invite_par = '';

    #[Validate('required|accepted')]
    public $attestation_sante = false;

    #[Validate('required|string')]
    public $autorisation = '';

    public $successMessage = '';

    public function submit()
    {
        $this->validate();

        // Ici vous pouvez envoyer un email ou enregistrer dans la base de données
        // Pour l'instant, on affiche juste un message de succès

        $this->successMessage = 'Merci ! Votre inscription a bien été enregistrée. Nous avons hâte d\'accueillir ' . $this->prenom . ' pour cet anniversaire !';

        // Réinitialiser le formulaire
        $this->reset(['nom', 'prenom', 'age', 'email', 'telephone', 'invite_par', 'attestation_sante', 'autorisation']);
    }

    public function render()
    {
        return view('livewire.invitation-anniversaire')
            ->layout('layouts.app');
    }
}
