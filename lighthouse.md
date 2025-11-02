# 📊 Plan d'Optimisation Lighthouse - Projet Equinans

> **Date de création** : 2025-11-01
> **Status** : EN ATTENTE - À implémenter après finalisation du site

---

## 🎯 Contexte & Objectifs

### Situation actuelle
- **Stack** : BALL (Bootstrap + Alpine + Laravel + Livewire 3)
- **Build tool** : Vite.js
- **Template** : Template HTML/jQuery acheté avec dépendances legacy
- **Mode SPA Livewire** : Prévu pour le futur

### Objectifs finaux
1. ✅ Maintenir tous les scripts du template fonctionnels
2. ✅ Score Lighthouse > 90
3. ✅ Compatibilité avec Livewire SPA mode
4. ✅ Réduction du bundle size de ~40% (800KB → 450KB)

---

## 🔴 Problématiques Identifiées

### 1. Conflit Architectural Majeur
**Problème** : Mix entre architecture moderne (ES6 modules) et legacy (jQuery global)

```javascript
// app.js - Configuration actuelle
import $ from 'jquery';           // ✅ ES6 moderne
window.$ = window.jQuery = $;     // ❌ Pollution globale nécessaire pour plugins
import './function.js';           // ❌ IIFE classique (function($){...})(jQuery)
```

**Impact** :
- Empêche le tree-shaking optimal de Vite
- Duplication de code dans le bundle
- Conflits potentiels de contexte

---

### 2. Duplication Bootstrap (200KB gaspillés)

**Fichier** : `resources/views/layouts/base.blade.php`
```html
<!-- ❌ PROBLÈME : Chargé via CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
```

**Fichier** : `resources/js/app.js`
```javascript
// ❌ PROBLÈME : Aussi chargé via NPM !
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;
```

**Conséquence** : ~200KB chargés 2 fois (CDN + bundle Vite)

---

### 3. Configuration Vite Sous-optimale

**Fichier** : `vite.config.js`
```javascript
// ❌ PROBLÈME : Injection globale inefficace
import inject from '@rollup/plugin-inject';

plugins: [
    inject({
        $: 'jquery',
        jQuery: 'jquery',
        gsap: 'gsap',
    }),
    // ...
]
```

**Impact** :
- Empêche le code splitting efficace
- Force le bundling de jQuery partout
- Réduit les capacités de tree-shaking

---

### 4. Dépendances Legacy Non-Modulaires

**Fichiers identifiés** :
```
resources/js/
├── function.js                    (320 lignes - IIFE jQuery classique)
├── jquery.counterup.min.js       (Plugin jQuery legacy)
├── jquery.waypoints.min.js       (Plugin jQuery legacy)
├── jquery.magnific-popup.min.js  (Plugin jQuery legacy)
├── wow.min.js                    (Animation on scroll)
├── magiccursor.js                (Effet curseur custom)
├── parallaxie.js                 (Effet parallaxe)
├── SmoothScroll.js               (Scroll personnalisé)
└── validator.min.js              (Validation formulaire)
```

**Problème** : Ces fichiers utilisent des patterns non-ES6
- IIFE : `(function($){ ... })(jQuery)`
- Dépendances globales implicites
- Pas de `export` moderne

---

### 5. Problème Futur : Livewire SPA Mode

**Ce qui va se passer** :
```javascript
// 1. Page initiale (/) - Scripts s'exécutent ✅
new WOW().init();
$('.counter').counterUp();

// 2. Navigation SPA vers /about
// → DOM remplacé par Livewire
// → Scripts NE SE RÉ-EXÉCUTENT PAS ❌
// → WOW, CounterUp, Swiper cassés sur /about
```

**Scripts concernés** :
- WOW.js (animations on scroll)
- CounterUp (compteurs animés)
- Swiper (sliders)
- Magnific Popup (lightbox)
- Parallaxie (effets parallaxe)

**Solution requise** : Hook Livewire `livewire:navigated` pour ré-init

---

### 6. Impact Lighthouse Actuel

| Métrique | Score estimé | Causes |
|----------|-------------|---------|
| **Performance** | 60-70 | Render-blocking CSS/JS, duplication Bootstrap |
| **Best Practices** | 80-85 | Scripts non optimisés |
| **SEO** | 90+ | OK (Laravel gère bien) |
| **Accessibility** | 85-90 | OK (template bien construit) |

**Problèmes détectés** :
- ❌ Render-blocking resources (Bootstrap CDN)
- ❌ Duplication de code (~200KB)
- ❌ Pas de code splitting
- ❌ Pas de lazy loading des images
- ❌ Scripts non defer/async

**Bundle size estimé** : ~800KB (non gzippé)

---

## 🚀 Plan d'Action (5 Phases)

---

## **PHASE 1 : Nettoyage & Optimisation de Base** ⏱️ ~30min

### 1.1 Éliminer la duplication Bootstrap

**Fichier** : `resources/views/layouts/base.blade.php`
```diff
- <!-- Bootstrap CSS -->
- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles

- <!-- Bootstrap JS -->
- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
```

**Résultat** : -200KB, +10 points Performance

---

### 1.2 Optimiser la configuration Vite

**Fichier** : `vite.config.js`
```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    build: {
        // Code splitting manuel
        rollupOptions: {
            output: {
                manualChunks: {
                    'vendor-jquery': ['jquery'],
                    'vendor-gsap': ['gsap', 'gsap/ScrollTrigger', 'gsap/SplitText'],
                    'vendor-swiper': ['swiper'],
                    'vendor-bootstrap': ['bootstrap', '@popperjs/core'],
                },
            },
        },

        // Minification agressive
        minify: 'terser',
        terserOptions: {
            compress: {
                drop_console: true,
                drop_debugger: true,
            },
        },

        // Optimisation chunks
        chunkSizeWarningLimit: 500,
    },

    // Optimisations dev
    server: {
        cors: true,
        hmr: {
            overlay: true,
        },
    },
});
```

**Résultat** : Meilleur tree-shaking, chunks optimisés

---

### 1.3 Ajouter preload des ressources critiques

**Fichier** : `resources/views/layouts/base.blade.php`
```html
<head>
    <!-- ... -->

    <!-- Preload des ressources critiques -->
    @production
        <link rel="preload" as="style" href="{{ Vite::asset('resources/css/app.css') }}">
        <link rel="preload" as="script" href="{{ Vite::asset('resources/js/app.js') }}">
    @endproduction

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
```

**Résultat** : -300ms First Contentful Paint

---

## **PHASE 2 : Architecture Modulaire avec Lazy Loading** ⏱️ ~1h

### 2.1 Restructurer l'arborescence JS

**Nouvelle structure** :
```
resources/js/
├── app.js                          (Point d'entrée)
├── core/
│   ├── jquery-setup.js            (Configuration jQuery globale)
│   └── bootstrap-setup.js         (Configuration Bootstrap)
├── modules/
│   ├── animations.js              (GSAP, WOW, ScrollTrigger)
│   ├── sliders.js                 (Swiper)
│   ├── effects.js                 (Parallaxie, MagicCursor)
│   ├── forms.js                   (Validator)
│   ├── lightbox.js                (Magnific Popup)
│   └── counters.js                (CounterUp, Waypoints)
├── utils/
│   ├── lazy-loader.js             (Système de lazy loading)
│   └── livewire-hooks.js          (Hooks pour SPA mode)
└── legacy/
    ├── function.js                (Script template original)
    ├── parallaxie.js
    ├── magiccursor.js
    └── SmoothScroll.js
```

---

### 2.2 Créer le système de lazy loading

**Fichier** : `resources/js/utils/lazy-loader.js`
```javascript
/**
 * Lazy Loader - Charge les modules à la demande
 */

const loadedModules = new Set();

export async function loadModule(moduleName) {
    if (loadedModules.has(moduleName)) {
        console.log(`[LazyLoader] Module "${moduleName}" déjà chargé`);
        return;
    }

    try {
        const module = await import(`../modules/${moduleName}.js`);
        loadedModules.add(moduleName);
        console.log(`[LazyLoader] Module "${moduleName}" chargé avec succès`);
        return module;
    } catch (error) {
        console.error(`[LazyLoader] Erreur lors du chargement de "${moduleName}"`, error);
    }
}

export async function loadModules(moduleNames) {
    return Promise.all(moduleNames.map(name => loadModule(name)));
}

export function isModuleLoaded(moduleName) {
    return loadedModules.has(moduleName);
}
```

---

### 2.3 Wrapper les plugins jQuery en modules ES6

**Exemple** : `resources/js/modules/counters.js`
```javascript
/**
 * Module Counters - Gère CounterUp + Waypoints
 */

import $ from 'jquery';

// Import des plugins jQuery legacy
import '../legacy/jquery.waypoints.min.js';
import '../legacy/jquery.counterup.min.js';

export function init() {
    if (!$('.counter').length) {
        console.log('[Counters] Aucun compteur trouvé sur cette page');
        return;
    }

    $('.counter').counterUp({
        delay: 6,
        time: 3000
    });

    console.log('[Counters] Compteurs initialisés');
}

export function destroy() {
    // Cleanup si nécessaire pour SPA
    $('.counter').off();
}
```

**Exemple** : `resources/js/modules/animations.js`
```javascript
/**
 * Module Animations - GSAP, WOW, ScrollTrigger
 */

import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { SplitText } from 'gsap/SplitText';

// WOW.js (legacy)
import { WOW } from 'wowjs';

gsap.registerPlugin(ScrollTrigger, SplitText);

let wowInstance = null;

export function init() {
    // WOW.js
    wowInstance = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true
    });
    wowInstance.init();

    // Image Reveal Animation (GSAP)
    initImageReveal();

    // Text Animations (GSAP + SplitText)
    initTextAnimations();

    console.log('[Animations] Animations initialisées');
}

export function refresh() {
    // Pour Livewire SPA - rafraîchir les animations
    if (wowInstance) {
        wowInstance.sync();
    }
    ScrollTrigger.refresh();
}

export function destroy() {
    ScrollTrigger.getAll().forEach(st => st.kill());
}

function initImageReveal() {
    if (!document.querySelectorAll(".reveal").length) return;

    let revealContainers = document.querySelectorAll(".reveal");
    revealContainers.forEach((container) => {
        let image = container.querySelector("img");
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: container,
                toggleActions: "play none none none"
            }
        });
        tl.set(container, { autoAlpha: 1 });
        tl.from(container, 1, { xPercent: -100, ease: "power2.out" });
        tl.from(image, 1, { xPercent: 100, scale: 1, delay: -1, ease: "power2.out" });
    });
}

function initTextAnimations() {
    // Style 1
    if (document.querySelectorAll('.text-anime-style-1').length) {
        let elements = document.querySelectorAll('.text-anime-style-1');
        elements.forEach((element) => {
            let split = new SplitText(element, { type: "chars, words" });
            gsap.from(split.words, {
                duration: 1,
                delay: 0.5,
                x: 20,
                autoAlpha: 0,
                stagger: 0.05,
                scrollTrigger: { trigger: element, start: "top 85%" },
            });
        });
    }

    // Style 2
    if (document.querySelectorAll('.text-anime-style-2').length) {
        let elements = document.querySelectorAll('.text-anime-style-2');
        elements.forEach((element) => {
            let split = new SplitText(element, { type: "chars, words" });
            gsap.from(split.chars, {
                duration: 1,
                delay: 0.1,
                x: 20,
                autoAlpha: 0,
                stagger: 0.03,
                ease: "power2.out",
                scrollTrigger: { trigger: element, start: "top 85%" },
            });
        });
    }
}
```

---

### 2.4 Refactoriser app.js

**Fichier** : `resources/js/app.js`
```javascript
/* ========================================
   Equinans - Point d'entrée principal
   ======================================== */

// ============================================
// CORE - Chargé sur toutes les pages
// ============================================

import $ from 'jquery';
window.$ = window.jQuery = $;

import '@popperjs/core';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

console.log('[App] Core chargé : jQuery, Bootstrap');

// ============================================
// MODULES - Lazy loaded selon la page
// ============================================

import { loadModule } from './utils/lazy-loader.js';

// Détection automatique des modules requis par page
window.addEventListener('DOMContentLoaded', async () => {
    const pageModules = window.pageModules || detectRequiredModules();

    console.log('[App] Modules requis :', pageModules);

    for (const moduleName of pageModules) {
        const module = await loadModule(moduleName);
        if (module && typeof module.init === 'function') {
            module.init();
        }
    }
});

/**
 * Détecte automatiquement les modules requis selon les éléments DOM présents
 */
function detectRequiredModules() {
    const modules = [];

    // Animations (WOW, GSAP)
    if (document.querySelector('.wow, .reveal, [class*="text-anime"]')) {
        modules.push('animations');
    }

    // Sliders (Swiper)
    if (document.querySelector('.swiper')) {
        modules.push('sliders');
    }

    // Compteurs
    if (document.querySelector('.counter')) {
        modules.push('counters');
    }

    // Lightbox
    if (document.querySelector('.popup-video, .gallery-items')) {
        modules.push('lightbox');
    }

    // Effets (Parallaxie, MagicCursor)
    if (document.querySelector('.parallaxie, [data-cursor]')) {
        modules.push('effects');
    }

    // Formulaires
    if (document.querySelector('form[data-toggle="validator"]')) {
        modules.push('forms');
    }

    return modules;
}
```

---

## **PHASE 3 : Préparation Livewire SPA** ⏱️ ~45min

### 3.1 Créer le système de hooks Livewire

**Fichier** : `resources/js/utils/livewire-hooks.js`
```javascript
/**
 * Livewire Hooks - Gestion de la ré-initialisation des scripts en mode SPA
 */

import { loadModule, isModuleLoaded } from './lazy-loader.js';

// Registre des modules actifs et leurs méthodes de cleanup
const activeModules = new Map();

/**
 * Initialise les hooks Livewire
 */
export function initLivewireHooks() {
    // Hook appelé après chaque navigation SPA
    document.addEventListener('livewire:navigated', handleNavigation);

    console.log('[Livewire Hooks] Hooks initialisés');
}

/**
 * Gère la ré-initialisation après navigation SPA
 */
async function handleNavigation() {
    console.log('[Livewire Hooks] Navigation détectée, ré-initialisation...');

    // 1. Cleanup des modules précédents
    cleanupModules();

    // 2. Détection des nouveaux modules requis
    const requiredModules = window.pageModules || detectRequiredModules();

    // 3. Chargement et initialisation
    for (const moduleName of requiredModules) {
        const module = await loadModule(moduleName);

        if (module) {
            // Appel de la méthode refresh() si elle existe (sinon init())
            if (typeof module.refresh === 'function') {
                module.refresh();
            } else if (typeof module.init === 'function') {
                module.init();
            }

            activeModules.set(moduleName, module);
        }
    }

    console.log('[Livewire Hooks] Ré-initialisation terminée');
}

/**
 * Nettoie les modules actifs (appel destroy() si disponible)
 */
function cleanupModules() {
    activeModules.forEach((module, name) => {
        if (typeof module.destroy === 'function') {
            module.destroy();
            console.log(`[Livewire Hooks] Module "${name}" nettoyé`);
        }
    });
    activeModules.clear();
}

/**
 * Détection automatique (même logique que app.js)
 */
function detectRequiredModules() {
    const modules = [];

    if (document.querySelector('.wow, .reveal, [class*="text-anime"]')) {
        modules.push('animations');
    }
    if (document.querySelector('.swiper')) {
        modules.push('sliders');
    }
    if (document.querySelector('.counter')) {
        modules.push('counters');
    }
    if (document.querySelector('.popup-video, .gallery-items')) {
        modules.push('lightbox');
    }
    if (document.querySelector('.parallaxie, [data-cursor]')) {
        modules.push('effects');
    }
    if (document.querySelector('form[data-toggle="validator"]')) {
        modules.push('forms');
    }

    return modules;
}
```

**Modification de app.js** :
```javascript
// Ajouter à la fin de app.js
import { initLivewireHooks } from './utils/livewire-hooks.js';

// Initialiser les hooks Livewire pour le mode SPA
initLivewireHooks();
```

---

### 3.2 Déclarer les modules par page (optionnel)

**Fichier** : `resources/views/livewire/home.blade.php`
```blade
@push('page-scripts')
<script>
    // Override de la détection automatique si nécessaire
    window.pageModules = ['animations', 'sliders', 'counters', 'effects'];
</script>
@endpush
```

**Fichier** : `resources/views/layouts/base.blade.php`
```html
<body>
    @yield('body')

    @livewireScripts
    @stack('scripts')
    @stack('page-scripts')  <!-- ⬅️ Ajouter cette ligne -->
</body>
```

---

## **PHASE 4 : Optimisations Lighthouse** ⏱️ ~30min

### 4.1 Lazy loading des images

**Fichier** : `resources/views/livewire/home.blade.php`
```blade
<!-- Remplacer tous les <img> par : -->
<img src="{{ asset('storage/images/about-us-img-1.jpg') }}"
     alt="About Us"
     loading="lazy"  <!-- ⬅️ Ajouter cet attribut -->
     decoding="async">
```

**Script automatique** :
```javascript
// Ajouter à app.js pour automatiser
document.querySelectorAll('img:not([loading])').forEach(img => {
    img.setAttribute('loading', 'lazy');
    img.setAttribute('decoding', 'async');
});
```

---

### 4.2 Optimiser les fonts (si FontAwesome utilisé)

**Option 1 : Self-host FontAwesome**
```javascript
// app.js
import '@fortawesome/fontawesome-free/css/all.min.css';
```

**Option 2 : Charger uniquement les icônes utilisées**
```javascript
// app.js
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faStar, faPhone, faEnvelope } from '@fortawesome/free-solid-svg-icons';

library.add(faStar, faPhone, faEnvelope);
dom.watch(); // Remplace automatiquement les <i> par des <svg>
```

---

### 4.3 Minification CSS critique

**Fichier** : `resources/views/layouts/base.blade.php`
```html
<head>
    <!-- ... -->

    @production
        <!-- CSS critique inline (first paint) -->
        <style>
            /* Copier ici uniquement le CSS du header + hero */
            body{margin:0;font-family:sans-serif}
            .hero{min-height:100vh;background:#000}
            /* ... */
        </style>
    @endproduction

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
```

---

### 4.4 Compression Gzip/Brotli

**Fichier** : `public/.htaccess` (si Apache)
```apache
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript application/json
</IfModule>

<IfModule mod_brotli.c>
    AddOutputFilterByType BROTLI_COMPRESS text/html text/plain text/xml text/css text/javascript application/javascript application/json
</IfModule>
```

**Ou via Vite** :
```javascript
// vite.config.js
import viteCompression from 'vite-plugin-compression';

export default defineConfig({
    plugins: [
        // ...
        viteCompression({
            algorithm: 'brotliCompress',
            ext: '.br',
        }),
    ],
});
```

---

## **PHASE 5 : Monitoring & Ajustements** ⏱️ ~30min

### 5.1 Ajouter un système de debug

**Fichier** : `resources/js/utils/performance-monitor.js`
```javascript
/**
 * Performance Monitor - Tracking des métriques Lighthouse
 */

export function logPerformance() {
    if (!window.performance) return;

    const navigation = performance.getEntriesByType('navigation')[0];
    const paint = performance.getEntriesByType('paint');

    console.group('📊 Performance Metrics');
    console.log('DOM Content Loaded:', navigation.domContentLoadedEventEnd - navigation.domContentLoadedEventStart, 'ms');
    console.log('Load Complete:', navigation.loadEventEnd - navigation.loadEventStart, 'ms');

    paint.forEach(entry => {
        console.log(`${entry.name}:`, entry.startTime.toFixed(2), 'ms');
    });
    console.groupEnd();
}

// Appel automatique
window.addEventListener('load', () => {
    setTimeout(logPerformance, 0);
});
```

---

### 5.2 Tester avec Lighthouse CI

**Fichier** : `lighthouserc.js` (racine du projet)
```javascript
module.exports = {
    ci: {
        collect: {
            url: ['http://localhost:8000/'],
            numberOfRuns: 3,
        },
        assert: {
            preset: 'lighthouse:recommended',
            assertions: {
                'categories:performance': ['error', { minScore: 0.9 }],
                'categories:accessibility': ['error', { minScore: 0.9 }],
                'categories:best-practices': ['error', { minScore: 0.9 }],
                'categories:seo': ['error', { minScore: 0.9 }],
            },
        },
    },
};
```

**Script NPM** : `package.json`
```json
{
    "scripts": {
        "lighthouse": "lhci autorun"
    },
    "devDependencies": {
        "@lhci/cli": "^0.12.0"
    }
}
```

---

## 📈 Résultats Attendus

### Métriques Lighthouse

| Métrique | Avant | Après | Gain |
|----------|-------|-------|------|
| **Performance** | 60-70 | 90+ | +30% |
| **Best Practices** | 80 | 95+ | +15% |
| **SEO** | 90 | 95+ | +5% |
| **Accessibility** | 85 | 90+ | +5% |

### Métriques Techniques

| Métrique | Avant | Après | Gain |
|----------|-------|-------|------|
| **Bundle Size** | ~800KB | ~450KB | -44% |
| **First Contentful Paint** | 2-3s | 1-1.5s | -50% |
| **Time to Interactive** | 3-4s | 1.5-2s | -50% |
| **Total Blocking Time** | 600ms | 150ms | -75% |
| **Cumulative Layout Shift** | 0.25 | <0.1 | -60% |

### Bénéfices Fonctionnels

✅ **Scripts du template** : Tous fonctionnels
✅ **Mode SPA Livewire** : Compatible
✅ **Maintenance** : Architecture modulaire claire
✅ **Performance** : Lazy loading intelligent
✅ **SEO** : Score optimal

---

## 📝 Checklist de Migration

Avant de démarrer la migration, vérifier :

- [ ] Site fonctionnel et complet
- [ ] Tests manuels de tous les scripts effectués
- [ ] Backup de la branche actuelle (`git branch backup-before-optimization`)
- [ ] Tests sur environnement de dev uniquement
- [ ] Lighthouse baseline enregistré (score avant optimisation)

### Phase 1 (30min)
- [ ] Retirer CDN Bootstrap
- [ ] Optimiser vite.config.js
- [ ] Ajouter preload ressources critiques
- [ ] Tester : site toujours fonctionnel

### Phase 2 (1h)
- [ ] Créer arborescence modules/
- [ ] Implémenter lazy-loader.js
- [ ] Migrer 1 plugin test (ex: counters.js)
- [ ] Refactoriser app.js
- [ ] Tester : lazy loading fonctionne

### Phase 3 (45min)
- [ ] Créer livewire-hooks.js
- [ ] Intégrer à app.js
- [ ] Tester navigation SPA
- [ ] Vérifier ré-initialisation scripts

### Phase 4 (30min)
- [ ] Lazy loading images
- [ ] Optimiser fonts
- [ ] Minifier CSS critique
- [ ] Activer compression Brotli

### Phase 5 (30min)
- [ ] Lancer Lighthouse (x3 runs)
- [ ] Analyser bottlenecks restants
- [ ] Ajustements finaux
- [ ] Documentation des gains

---

## 🚨 Points d'Attention

### ⚠️ Risques

1. **Breaking changes** : Certains plugins jQuery peuvent mal réagir au lazy loading
2. **GSAP SplitText** : Plugin premium, vérifier la licence
3. **Livewire SPA** : Tester exhaustivement la ré-initialisation des scripts
4. **Cache navigateur** : Vider entre chaque test

### 🔧 Fallbacks

Si un module pose problème en lazy loading :

**Solution 1** : Forcer le chargement immédiat
```javascript
// app.js
import './modules/problematic-module.js'; // Import direct au lieu de lazy
```

**Solution 2** : Garder dans function.js legacy
```javascript
// Ne pas migrer ce plugin, le laisser dans function.js
```

---

## 📚 Ressources

### Documentation
- [Vite - Code Splitting](https://vitejs.dev/guide/build.html#chunking-strategy)
- [Livewire 3 - SPA Mode](https://livewire.laravel.com/docs/navigate)
- [Google Lighthouse](https://developer.chrome.com/docs/lighthouse/)
- [Web Vitals](https://web.dev/vitals/)

### Outils
- [Lighthouse CI](https://github.com/GoogleChrome/lighthouse-ci)
- [Webpack Bundle Analyzer](https://www.npmjs.com/package/webpack-bundle-analyzer) (équivalent Vite : `rollup-plugin-visualizer`)
- [webpagetest.org](https://www.webpagetest.org/)

---

## 🎯 Prochaines Étapes

**MAINTENANT** :
1. ✅ Finir le développement du site
2. ✅ Tester tous les scripts du template
3. ✅ Valider le design et les fonctionnalités

**APRÈS (Optimisation)** :
1. 📋 Revenir à ce document
2. 🧪 Créer une branche `feature/lighthouse-optimization`
3. 🚀 Exécuter les 5 phases dans l'ordre
4. 📊 Mesurer les gains avec Lighthouse
5. 🎉 Merger en production

---

**Document créé le** : 2025-11-01
**Dernière mise à jour** : 2025-11-01
**Auteur** : Claude Code
**Status** : ✋ EN ATTENTE - Ne pas implémenter maintenant
