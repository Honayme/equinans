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
use App\Livewire\Gallery;
use App\Livewire\InvitationAnniversaire;
use App\Livewire\OurSchedules;
use App\Livewire\Schedules\Programmes;
use App\Livewire\Schedules\CoursEtStages;
use App\Livewire\Schedules\Randonnees;


Route::get('/', Home::class)->name('home');
Route::get('/le-centre-equestre', About::class)->name('about');
Route::get('/equidrive-ekilike', TeachingMethod::class)->name('teaching');
Route::get('/activites-services', Services::class)->name('services');
Route::get('/activites-services/{slug}', ServiceShow::class)->name('services.show');
Route::get('/tarifs', Prices::class)->name('prices');
Route::get('/nous-contacter', Contact::class)->name('contact');
Route::get('/album-photo', Gallery::class)->name('gallery');
Route::get('/invitation-anniversaire', InvitationAnniversaire::class)->name('invitation.anniversaire');

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


// Routes Galops Poney (URLs simplifiées)
Route::name('galops.poney.')->group(function () {
    Route::get('/galop-bronze', GalopBronze::class)->name('galop-bronze');
    Route::get('/galop-argent', GalopArgent::class)->name('galop-argent');
    Route::get('/galop-or', GalopOr::class)->name('galop-or');
    Route::get('/poney-bronze', PoneyBronze::class)->name('poney-bronze');
    Route::get('/poney-argent', PoneyArgent::class)->name('poney-argent');
    Route::get('/poney-or', PoneyOr::class)->name('poney-or');
});

// Routes Programmes & Horaires
Route::get('/nos-programmes', OurSchedules::class)->name('schedules');
Route::prefix('nos-programmes')->name('schedules.')->group(function () {
    Route::get('/programmes', Programmes::class)->name('programmes');
    Route::get('/cours-et-stages', CoursEtStages::class)->name('cours-stages');
    Route::get('/randonnees', Randonnees::class)->name('randonnees');
});
