<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\TeachingMethod;
use App\Livewire\Services;
use App\Livewire\ServiceShow;
use App\Livewire\Prices;
use App\Livewire\Contact;
use App\Livewire\LegalPageShow;

Route::get('/', Home::class)->name('home');
Route::get('/le-centre-equestre', About::class)->name('about');
Route::get('/methode-pedagogique', TeachingMethod::class)->name('teaching');
Route::get('/activites-services', Services::class)->name('services');
Route::get('/activites-services/{slug}', ServiceShow::class)->name('services.show');
Route::get('/tarifs', Prices::class)->name('prices');
Route::get('/nous-contacter', Contact::class)->name('contact');

// Pages légales
Route::get('/reglement-interieur', LegalPageShow::class)
    ->defaults('slug', 'reglement-interieur')
    ->name('legal.reglement');
Route::get('/informations-legales', LegalPageShow::class)
    ->defaults('slug', 'informations-legales')
    ->name('legal.informations');
