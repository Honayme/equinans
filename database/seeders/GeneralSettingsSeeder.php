<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Settings\GeneralSettings;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = app(GeneralSettings::class);

        $settings->phone = '+33 1 23 45 67 89';
        $settings->email = 'contact@equinans.fr';
        $settings->address = '123 Rue du Centre Équestre, 75000 Paris, France';
        $settings->opening_hours = 'Lundi - Vendredi: 9h00 - 18h00' . "\n" . 'Samedi - Dimanche: 10h00 - 17h00';
        $settings->facebook_url = 'https://facebook.com/equinans';

        $settings->save();
    }
}
