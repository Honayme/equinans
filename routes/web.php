<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\TeachingMethod;
use App\Livewire\Services;
use App\Livewire\Prices;
use App\Livewire\Contact;

Route::get('/', Home::class)->name('home');
Route::get('/le-centre-equestre', About::class)->name('about');
Route::get('/methode-pedagogique', TeachingMethod::class)->name('teaching');
Route::get('/activites-services', Services::class)->name('services');
Route::get('/tarifs', Prices::class)->name('prices');
Route::get('/nous-contacter', Contact::class)->name('contact');
