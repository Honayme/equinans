<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class AnniversaireServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = [
            'title' => 'Fêter son anniversaire à Equinans',
            'slug' => 'anniversaire',
            'introduction' => 'Une idée géniale pour organiser l\'anniversaire de votre enfant ! Plongez dans le monde magique des poneys et chevaux. Souvenirs inoubliables garantis !!',
            'content' => [
                'image' => 'anniversaire-cheval.jpg',
                'experience_image' => 'poney-anniversaire.jpg', // Image pour la section "Informations pratiques"
                'description' => [
                    'paragraphs' => [
                        'Offrez à votre enfant une fête d\'anniversaire unique et mémorable au centre équestre Equinans ! Dans un cadre enchanteur, vos petits invités découvriront le monde magique des poneys et des chevaux.',
                        'Notre équipe vous propose une animation complète pour que cette journée reste gravée dans les mémoires. Une expérience ludique et éducative qui ravira les enfants passionnés d\'équitation ou simplement curieux de découvrir ces magnifiques animaux.',
                    ],
                ],
                'sub_sections' => [
                    [
                        'title' => 'Programme de la fête',
                        'content' => [
                            'paragraphs' => [
                                'Nous avons conçu un programme complet pour garantir une journée inoubliable à votre enfant et ses amis. Chaque moment est pensé pour créer des souvenirs magiques.',
                            ],
                            'items' => [
                                [
                                    'name' => 'Accueil en musique',
                                    'detail' => 'Les invités sont accueillis dans une ambiance festive et musicale pour démarrer la fête dans la bonne humeur.',
                                ],
                                [
                                    'name' => 'Déguisements magiques',
                                    'detail' => 'Mise à disposition de déguisements (princesses, chevaliers...) pour que chaque enfant puisse se transformer en héros de son histoire.',
                                ],
                                [
                                    'name' => 'Séance de jeux à poney',
                                    'detail' => 'Activités ludiques et encadrées à poney en musique, adaptées à l\'âge et au niveau des enfants. Moments de complicité avec nos adorables poneys.',
                                ],
                                [
                                    'name' => 'Goûter et cadeaux',
                                    'detail' => 'Moment convivial pour le goûter et l\'ouverture des cadeaux, dans le parc du centre équestre ou dans notre club house selon la météo.',
                                ],
                            ],
                        ],
                    ],
                    [
                        'title' => 'Informations pratiques',
                        'content' => [
                            'items' => [
                                [
                                    'title' => 'Public ciblé',
                                    'text' => 'Enfants de 3 à 12 ans, débutants ou cavaliers confirmés.',
                                ],
                                [
                                    'title' => 'Ton et ambiance',
                                    'text' => 'Enthousiaste, accueillant et magique pour créer des souvenirs inoubliables.',
                                ],
                                [
                                    'title' => 'Encadrement',
                                    'text' => 'Notre équipe diplômée assure la sécurité et l\'animation de la fête du début à la fin.',
                                ],
                            ],
                        ],
                    ],
                    [
                        'title' => 'Formulaire d\'invitation',
                        'content' => [
                            'paragraphs' => [
                                'Pour les enfants invités à un anniversaire organisé à Equinans, nous mettons à disposition un formulaire d\'inscription obligatoire. Ce formulaire permet de recueillir les informations nécessaires et les autorisations parentales pour accueillir chaque enfant en toute sécurité.',
                            ],
                        ],
                    ],
                ],
            ],
            'order' => 100,
            'is_active' => true,
        ];

        Service::updateOrCreate(
            ['slug' => $service['slug']],
            $service
        );

        $this->command->info("Service Anniversaire créé avec succès !");
    }
}
