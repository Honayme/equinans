<?php

use App\Livewire\Galops\Poney\GalopArgent;
use App\Livewire\Galops\Poney\GalopBronze;
use App\Livewire\Galops\Poney\GalopOr;
use App\Livewire\Galops\Poney\PoneyArgent;
use App\Livewire\Galops\Poney\PoneyBronze;
use App\Livewire\Galops\Poney\PoneyOr;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\TeachingMethod;
use App\Livewire\Services;
use App\Livewire\ServiceShow;
use App\Livewire\Prices;
use App\Livewire\Contact;
use App\Livewire\LegalPageShow;
use App\Livewire\Galops\Cheval\Galop1;
use App\Livewire\Galops\Cheval\Galop2;
use App\Livewire\Galops\Cheval\Galop3;
use App\Livewire\Galops\Cheval\Galop4;
use App\Livewire\Galops\Cheval\Galop5;
use App\Livewire\Galops\Cheval\Galop6;
use App\Livewire\Galops\Cheval\Galop7;


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

// Pages Galops
Route::get('/galop-1', Galop1::class)->name('galop.1');
Route::get('/galop-2', Galop2::class)->name('galop.2');
Route::get('/galop-3', Galop3::class)->name('galop.3');
Route::get('/galop-4', Galop4::class)->name('galop.4');
Route::get('/galop-5', Galop5::class)->name('galop.5');
Route::get('/galop-6', Galop6::class)->name('galop.6');
Route::get('/galop-7', Galop7::class)->name('galop.7');


Route::prefix('galops/poney')->name('galops.poney.')->group(function () {
    Route::get('/galop-bronze', GalopBronze::class)->name('galop-bronze');
    Route::get('/galop-argent', GalopArgent::class)->name('galop-argent');
    Route::get('/galop-or', GalopOr::class)->name('galop-or');
    Route::get('/poney-bronze', PoneyBronze::class)->name('poney-bronze');
    Route::get('/poney-argent', PoneyArgent::class)->name('poney-argent');
    Route::get('/poney-or', PoneyOr::class)->name('poney-or');
});
