<?php

namespace Database\Seeders;

use App\Models\LegalPage;
use Illuminate\Database\Seeder;

class LegalPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Règlement intérieur
        $reglementPath = base_path('réglementinterieur.md');
        if (file_exists($reglementPath)) {
            LegalPage::updateOrCreate(
                ['type' => 'reglement_interieur'],
                [
                    'title' => 'Règlement Intérieur',
                    'slug' => 'reglement-interieur',
                    'content' => file_get_contents($reglementPath),
                    'is_active' => true,
                    'meta_title' => 'Règlement Intérieur - Centre Équestre Equinans',
                    'meta_description' => 'Consultez le règlement intérieur du Centre Équestre Equinans à Nans-les-Pins. Règles de sécurité, organisation et conditions d\'utilisation.',
                    'meta_keywords' => 'règlement intérieur, centre équestre, Equinans, Nans-les-Pins, sécurité',
                ]
            );
        }

        // Informations légales
        $informationsPath = base_path('informationslégale.md');
        if (file_exists($informationsPath)) {
            LegalPage::updateOrCreate(
                ['type' => 'informations_legales'],
                [
                    'title' => 'Informations Légales',
                    'slug' => 'informations-legales',
                    'content' => file_get_contents($informationsPath),
                    'is_active' => true,
                    'meta_title' => 'Informations Légales - Centre Équestre Equinans',
                    'meta_description' => 'Mentions légales et informations juridiques du Centre Équestre Equinans - Coordonnées, hébergement, CNIL.',
                    'meta_keywords' => 'mentions légales, informations légales, Equinans, centre équestre',
                ]
            );
        }
    }
}
