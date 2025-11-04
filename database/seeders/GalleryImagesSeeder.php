<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class GalleryImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupère toutes les images du dossier images_gallery
        $images = Storage::disk('public')->files('images_gallery');

        if (empty($images)) {
            $this->command->warn('Aucune image trouvée dans storage/app/public/images_gallery/');
            return;
        }

        $this->command->info('Import de ' . count($images) . ' images...');

        // Crée une entrée Gallery pour chaque image
        foreach ($images as $index => $imagePath) {
            // Extrait le nom du fichier
            $fileName = basename($imagePath);

            // Génère un titre basé sur le nom du fichier
            $title = str_replace(['-', '_'], ' ', pathinfo($fileName, PATHINFO_FILENAME));
            $title = ucwords($title);

            // Crée l'entrée Gallery
            $gallery = Gallery::create([
                'title' => $title,
                'is_active' => true,
                'order' => $index + 1,
            ]);

            // Obtient le chemin complet du fichier
            $fullPath = Storage::disk('public')->path($imagePath);

            // Ajoute l'image au modèle avec custom properties pour le alt text
            $gallery->addMedia($fullPath)
                ->withCustomProperties([
                    'alt' => $title, // Utilise le titre comme alt text par défaut
                ])
                ->toMediaCollection('gallery_images');

            $this->command->info("✓ Importé: {$fileName} (ordre: " . ($index + 1) . ")");
        }

        $this->command->info('✓ Import terminé avec succès !');
    }
}
