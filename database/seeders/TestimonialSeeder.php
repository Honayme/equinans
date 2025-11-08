<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vide la table avant de la remplir (recommandé pour les tests)
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // Optionnel, si truncate échoue
        Testimonial::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Optionnel

        $testimonials = [
            [
                'name' => 'coralie varvara',
                'content' => 'Je n’ai jamais vu un centre équestre autant bien entretenu, les chevaux sont tous propres et très beaux , dommage que vous êtes pas sur Allauch car mes filles vont faire de l équitation à la rentrée et c est la première fois que je trouve un centre équestre aussi agréable , propre avec des monitrices autant sympathique, on a passé une agréable balade avec la monitrice dont je me rappelle plus son prénom et sa fille Emy , elles ont été adorables . Encore merci pour tout on reviendra vous voir .',
                'image_path' => 'images/author-1.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Fabrice Caron',
                'content' => "Ce n'est pas un centre équestre, c'est un centre de la joie de vivre la passion équestre. Le sourire du cow-boy Loic, la sympathique équipe, la propreté du centre, les superbes chevaux et poneys, l'accessibilité de toute l'équipe et leur passion, font de ce centre un lieux où il fait bon y aller. Ballade en journée, nocturne, et même parents enfants en poneys avec cerise sur le gâteau laser game et karting au tarif resonnable. Mention spéciale au domaine de la Sainte Baume magnifique a découvrir à cheval.",
                'image_path' => 'images/author-2.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Morgane Ollivier',
                'content' => 'Notre fille Lily a adoré son stage de poney. L’accueil, la disponibilité de Karine et la pédagogie de Valérie sont remarquables … une équipe au top ! Nous aurons plaisir à revenir pour chacune des vacances ! 👍🏻☺️',
                'image_path' => 'images/author-3.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Pauline Bernard',
                'content' => 'Nous avons eu l’occasion de faire une balade d’une heure avec Marion comme accompagnatrice. La balade était hyper agréable et une monitrice au top, qui s’adapte à tous les âges. Notre fille a également bénéficié d’un cours « particulier », n’ayant pas d’autres enfants inscrits sur cette session. Toujours avec Marion, qui a été d’une douceur et d’une patience incomparables face a une petite fille qui ne décrochait pas un mot. Résultat: Léna garde un magnifique souvenir de cette balade sur le dos de Haribo. Au delà de cela, le lieu est magnifiquement entretenu et l’on y voit des animaux heureux, c’est un domaine qui respire le bien être animal. Merci à vous et ne changez rien !',
                'image_path' => 'images/author-4.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Florence Delage',
                'content' => 'Très bon contact téléphonique et très bon accueil. Balade sympathique et bien encadrée. Système de « guidon » intéressant pour la conduite et le bien-être de l’animal. Je recommande.',
                'image_path' => 'images/author-5.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Cécilia Chardon',
                'content' => "Que ce soit en promenade à cheval, au laser game, ou au kart électrique, tout est génial ! L'accueil, la gentillesse de l'équipe (Loïc, Karine, Valerie, et les petits capitaines). On ne peut que vous conseiller d'y aller les yeux fermés et de vous régaler !",
                'image_path' => 'images/author-6.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Victoria Vanessa',
                'content' => "Un grand merci au centre et à Endever, nous avons fait une ballade tres agréable et j'ai vecu une expérience exceptionnelle, je garderai ce souvenir précieusement, l'équipe du centre est tres professionnelle et la bienveillance vis à vis des animaux est de rigueur, je recommande vraiment l'expérience, vous pouvez y aller les yeux fermés",
                'image_path' => 'images/author-7.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Sophie (Fofie)',
                'content' => 'Chaque été nous faisons des balades: 1h pti dej ou nocturnes: toujours 1 moment sympathique et agréable. Equipe au top: bon accueil, à l écoute;cavalerie adaptée:du débutant au confirmé.ambiance familiale où le bien être de l animal est 1 priorité.Entre amis ou en famille: allez y !!!!',
                'image_path' => 'images/author-8.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Ornella U',
                'content' => 'Un excellent moment en famille 🐴💛 merci au centre équestre pour la balade ! Je recommande les yeux fermés ✨',
                'image_path' => 'images/author-9.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Brendan Fory',
                'content' => "Je recommande vivement ce centre équestre, nous avons passé une super balade, l'équipe est super, et les chevaux sont magnifiques, Merci encore pour cette découverte tout simplement magnifique, nous reviendrons avec plaisir 😁👌",
                'image_path' => 'images/author-10.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Fanny DAHLEM (Fanfan)',
                'content' => 'Au top ! Monitrice agréable et sympathique, chevaux super bien soignés et écurie propre. Balade semi-nocturne très agréable (nous avons même pu apercevoir un petit renardeau!) Merci à l’équipe !',
                'image_path' => 'images/author-11.jpg',
                'rating' => 5,
            ],
        ];

        // Insère les données dans la base
        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
