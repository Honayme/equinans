# Claude.md - Référence Projet Equinans

## Vue d'ensemble du projet

**Equinans** est une application web Laravel 12 + Livewire 3 pour un centre équestre français. C'est un système de gestion de contenu complet avec un site public et un panneau admin.

- **Type**: Application Laravel + Livewire full-stack
- **Objectif**: Site web et CMS pour centre équestre (services, formations Galop, témoignages, galeries)
- **URL locale**: http://equinans.test
- **Base de données**: MySQL (base: equinans)
- **Localisation**: Français (routes, labels, contenu)

---

## Architecture et structure

```
app/
├── Filament/              # Panneau admin (Filament)
│   ├── Pages/            # ManageGeneralSettings
│   └── Resources/        # Gallery, LegalPages (CRUD)
├── Livewire/             # Composants Livewire
│   ├── Home, About, Services, ServiceShow, Prices, Contact
│   ├── TeachingMethod, Galops/
│   └── Partials/         # Menu, Footer, Testimonial, ServicesCards, GallerySlider
├── Models/               # User, Service, Testimonial, Gallery, LegalPage, Galop
├── Settings/             # Spatie Settings pour paramètres persistants
├── Helpers/              # Fonctions helper
└── Http/                 # Controllers, middleware

database/
├── migrations/           # Schémas (users, services, testimonials, galleries, legal_pages, galops, settings, media)
└── seeders/             # ServicesSeeder, TestimonialSeeder, GalleryImagesSeeder, etc.

resources/views/livewire/  # Templates Blade des composants Livewire

routes/web.php            # Routes (slugs pour services et pages légales)

public/                   # Assets statiques, images, fonts

config/                   # app.php, database.php, media-library.php, seo.php, etc.
```

---

## Stack technologique

### Backend (PHP/Laravel)
- **Laravel 12.x** - Framework principal
- **Livewire 3.x** - Composants réactifs frontend
- **Filament 4.x** - Panneau admin headless
- **Spatie Media Library** - Gestion des images
- **Spatie Laravel Settings** - Paramètres en base de données
- **Laravel SEO** - Gestion des meta tags SEO

### Frontend (npm)
- **Bootstrap 5.3** - Framework CSS
- **Vite 7.x** - Bundler d'assets
- **jQuery 3.7** - Scripts spécifiques
- **Swiper** - Sliders mobiles
- **GSAP + WOW.js** - Animations
- **Font Awesome 7.x** - Icônes
- **Magnific Popup** - Lightbox

### Tools & Config
- **Vite** pour build
- **PestPHP** pour tests
- **Laravel Pint** pour formatage code

---

## Modèles et base de données

### Models principaux

| Model | Table | Rôle |
|-------|-------|------|
| **User** | users | Authentification/admin |
| **Service** | services | Activités/services (avec contenu JSON imbriqué) |
| **Testimonial** | testimonials | Avis clients (nom, contenu, image, rating 1-5) |
| **Gallery** | galleries | Collections d'images + media library |
| **LegalPage** | legal_pages | Pages légales (type enum, SEO fields) |
| **Galop** | galops | Niveaux d'entraînement (1-7 + Bronze/Argent/Or) |

### Patterns Eloquent utilisés

```php
// Slugs auto-générés (boot() dans models)
public function getRouteKeyName() { return 'slug'; }

// Scopes réutilisables
->active()   // where('is_active', true)
->ordered()  // orderBy('order')

// Colonnes JSON
$casts = ['content' => 'array', 'sections' => 'array']
```

---

## Conventions de code

### Nommage

| Type | Convention | Exemple |
|------|-----------|---------|
| Classes PHP | PascalCase | `ServiceShow`, `LegalPage` |
| Méthodes/propriétés | camelCase | `render()`, `$fillable` |
| BD tables | snake_case, pluriel | `legal_pages`, `services` |
| BD colonnes | snake_case | `is_active`, `created_at` |
| Routes URL | kebab-case | `/activites-services`, `/le-centre-equestre` |
| Répertoires | snake_case | `app/Livewire/Partials/` |

### Structure fichiers

- **Modèles**: `App\Models\ClassName`
- **Composants Livewire**: `App\Livewire\` (noms correspondent aux routes)
- **Ressources Filament**: `App\Filament\Resources\`
- **Vues**: `resources/views/livewire/` (match component names)
- **Migrations**: Format timestamped `YYYY_MM_DD_HHMMSS_action.php`

---

## Pages et routes principales

### Pages publiques (Livewire)

| Route | Composant | Contenu |
|-------|-----------|---------|
| `/` | Home | Accueil, héros, témoignages, aperçu services |
| `/le-centre-equestre` | About | Infos centre |
| `/methode-pedagogique` | TeachingMethod | Approche pédagogique |
| `/activites-services` | Services | Liste services |
| `/activites-services/{slug}` | ServiceShow | Détail service |
| `/tarifs` | Prices | Tarification |
| `/nous-contacter` | Contact | Formulaire contact |
| `/reglement-interieur` | LegalPageShow | Page légale |
| `/informations-legales` | LegalPageShow | Page légale |
| `/galops/cheval/{slug}` | Galop pages | Niveaux formation chevaux |
| `/galops/poney/{slug}` | Galop pages | Niveaux formation poneys |

### Panneau admin (Filament)

- **URL**: `/admin`
- **Pages**: Dashboard, Manage General Settings
- **Ressources CRUD**: Gallery (images), Legal Pages (contenu)

---

## Modèles de code courants

### Composant Livewire basique

```php
<?php
namespace App\Livewire;

use Livewire\Component;

class PageName extends Component {
    public function render() {
        // Logique ici
        return view('livewire.page-name');
    }
}
```

### Blade template avec persistance

```blade
<div>
    @persist('menu')
        <x-menu />
    @endpersist

    {{ $content }}

    @persist('footer')
        <x-footer />
    @endpersist
</div>
```

### Migration avec colonnes courantes

```php
Schema::create('table_name', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('slug')->unique();
    $table->text('content');
    $table->boolean('is_active')->default(true);
    $table->integer('order')->default(0);
    $table->timestamps();
});
```

---

## Données et seeders

### Données principales

1. **Services** - Importées depuis `services.xml` (12KB)
   - Structure XML complexe avec contenu imbriqué
   - Convertie en JSON dans la base
   - Re-seeding possible avec UpdateOrCreate

2. **Testimonials** - 11 avis réels Google
   - Champ rating (1-5 stars)
   - Images locales

3. **Galops** - Niveaux d'entraînement
   - Chevaux: Galop 1-7
   - Poneys: Bronze, Argent, Or

4. **Gallery** - Images gérées via Media Library
   - Conversions: thumbnail, large
   - Stockage: `public/storage`

### Seed database

```bash
php artisan migrate:fresh --seed
```

---

## Configuration importante

### Variables d'environnement (.env)

```
APP_NAME=Laravel
APP_ENV=local
DB_CONNECTION=mysql
DB_DATABASE=equinans
DB_USERNAME=root
DB_PASSWORD=
QUEUE_CONNECTION=database
CACHE_STORE=database
SESSION_DRIVER=database
```

### Chemins clés

- **Storage média**: `public/storage/`
- **Images services**: Stockées en tant que contenu JSON
- **Settings**: Table `settings` (Spatie)
- **Cache**: Database driver

---

## Points d'extension courants

### Ajouter une nouvelle page

1. Créer composant Livewire: `App\Livewire\NewPage`
2. Créer vue: `resources/views/livewire/new-page.blade.php`
3. Ajouter route dans `routes/web.php`
4. (Optionnel) Ajouter au menu `Partials/Menu.php`

### Ajouter une ressource Filament

1. Créer ressource: `php artisan make:filament-resource ModelName`
2. Configurer schemas Form/Table dans `App\Filament\Resources\`
3. Ajouter au panneau admin automatiquement

### Modifier settings

- **Classe**: `App\Settings\GeneralSettings`
- **Accès**: `settings()->phone`, etc.
- **Helper**: `settings_helper.php`

### Ajouter une image à Gallery

- Via Filament `/admin` avec Media Library
- Conversions automatiques (thumbnail, large)
- Accessible en vues via relations

---

## Développement local

### Setup complet

```bash
composer install
npm install
composer run setup      # Ou manuellement:
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run build
```

### Development server

```bash
php artisan serve
npm run dev              # Watch mode assets
php artisan queue:listen
```

### Tests

```bash
php artisan test
php artisan pint        # Format code
```

---

## Git et commits récents

### Branche principale
- **Main branch**: `master`
- **Workflow**: Commits directs sur master

### Commits récents
- `cd14429` - Implement galop
- `e3e951b` - Add services and legal pages
- `4fe6dc9` - Add and integrate teaching method page
- `e108fff` - Add settings, image gallery and implement prices page
- `18c2cbc` - Set up application and component

### Fichiers modifiés/non trackés
- `app/Livewire/Partials/Testimonial.php` (modifié)
- `resources/views/livewire/partials/testimonial.blade.php` (modifié)
- `app/Livewire/Partials/ServicesCards.php` (nouveau)
- `app/Models/Testimonial.php` (nouveau)
- `database/migrations/2025_11_07_131427_create_testimonials_table.php` (nouveau)
- Et autres fichiers SEO/pages

---

## Notes importantes pour le développement

1. **Slugs au lieu d'IDs**: Services et legal pages utilisent `slug` comme route key (meilleur SEO)
2. **Persistance UI**: Menu/Footer persistent via `@persist()` pour éviter re-render
3. **JSON content**: Services ont du contenu JSON imbriqué, nécessite parsing prudent
4. **Media Library**: Utilise stockage `public`, accessible directement
5. **Settings**: Accès global via helper `settings()`, pas de session
6. **Français**: Routes et labels en français, formater dates avec locale FR
7. **Admin**: Filament headless à `/admin`, interface séparée du public
8. **SEO**: Utiliser classe SEO pour meta tags, config dans `config/seo.php`
9. **Build**: Vite assets doivent être compilés pour production (`npm run build`)
10. **Database driver**: Cache, session, queue tous sur database (dev local)

---

## Ressources utiles

- Documentation Livewire: https://livewire.laravel.com
- Documentation Filament: https://filamentphp.com
- Documentation Spatie Media: https://spatie.be/docs/laravel-medialibrary
- Documentation Spatie Settings: https://github.com/spatie/laravel-settings
- Laravel SEO: https://github.com/romanzipp/laravel-seo

---

**Dernière mise à jour**: 2025-11-08
**Projet actif**: Oui
**État**: Développement actif, features principales implémentées
