<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créer un utilisateur de test
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@equinans.fr',
        ]);

        // Lancer tous les seeders dans le bon ordre
        $this->call([
            GeneralSettingsSeeder::class,
            ServicesSeeder::class,
            AnniversaireServiceSeeder::class,
            TestimonialSeeder::class,
            LegalPagesSeeder::class,
            GalleryImagesSeeder::class,
        ]);
    }
}
