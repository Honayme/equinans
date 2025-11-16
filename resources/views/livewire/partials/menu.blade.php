<style>
    .navbar-nav .nav-link {
        font-weight: 700 !important;
    }
    .mobile-menu-nav a {
        font-weight: 700 !important;
    }

    /* Mega Menu Styles */
    .navbar.navbar-expand-lg {
        position: relative;
    }

    .nav-item.mega-menu {
        position: static; /* Important : le dropdown se positionne par rapport à .navbar */
    }

    .nav-item.mega-menu .mega-dropdown {
        position: absolute;
        top: calc(100% - 8px); /* Remonté de 8px pour cacher les bordures arrondies du menu */
        left: 0;
        right: 0;
        background: var(--white-color);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
        transform: translateY(-10px);
        border-radius: 0 0 12px 12px; /* Bordures arrondies en bas uniquement */
        overflow: hidden; /* Pour que le contenu respecte les bordures arrondies */
    }

    .nav-item.mega-menu:hover > .mega-dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    /* Empêcher le mega-dropdown de rester affiché quand on le survole */
    .mega-dropdown {
        pointer-events: none;
    }

    /* Permettre les clics sur les liens à l'intérieur */
    .mega-dropdown * {
        pointer-events: auto;
    }

    /* Grid 25% image / 75% liens (1/4 et 3/4) */
    .mega-dropdown-grid {
        display: grid;
        grid-template-columns: 1fr 3fr; /* 25% image, 75% liens */
        min-height: 400px;
        max-width: 1320px;
        margin: 0 auto;
        width: 100%;
    }

    /* Colonne Image (gauche) - Collée au bord, sans padding */
    .mega-column-image {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 0; /* Pas de padding, image collée au bord */
    }

    /* Colonne Liens (droite) - 3 colonnes */
    .mega-column-links {
        padding: 30px 35px;
        background: var(--white-color);
    }

    /* Grid pour les 4 colonnes de liens */
    .links-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4 colonnes égales */
        gap: 20px; /* Espacement entre les colonnes */
    }

    .link-column {
        display: flex;
        flex-direction: column;
    }

    /* IMPORTANT: Surcharge des styles .main-menu ul ul du custom.css qui cachent les sous-menus */
    .main-menu .mega-menu .mega-dropdown ul,
    .navbar-nav .mega-menu .mega-dropdown ul {
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
        display: block !important;
        position: static !important;
        float: none !important;
        width: auto !important;
        margin: 0 !important;
        background: transparent !important;
        border-radius: 0 !important;
    }

    .navbar-nav .mega-menu .mega-dropdown ul li {
        float: none !important;
        display: list-item !important;
        position: static !important;
        width: 100% !important;
    }

    .link-column h4 {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        color: var(--primary-color);
        margin-bottom: 15px;
        margin-top: 0;
        padding-bottom: 8px;
        border-bottom: 2px solid var(--accent-color);
    }

    .mega-column-links ul,
    .mega-column-links .dropdowndeservice {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 0 25px 0 !important;
        display: block !important;
        visibility: visible !important;
    }

    .mega-column-links ul li,
    .mega-column-links .dropdowndeservice li {
        margin-bottom: 0 !important;
        display: list-item !important;
        visibility: visible !important;
        color: #333 !important;
    }

    .mega-column-links ul li a,
    .mega-column-links .dropdowndeservice li a {
        display: block !important;
        padding: 10px 15px !important;
        color: #333 !important;
        text-decoration: none !important;
        font-size: 15px !important;
        font-weight: 500 !important;
        transition: all 0.2s ease !important;
        border-radius: 4px !important;
        line-height: 1.5 !important;
    }

    /* Surcharge additionnelle pour Bootstrap navbar */
    .navbar-nav .mega-menu .mega-dropdown a {
        color: #333 !important;
    }

    .mega-column-links ul li a:hover,
    .mega-column-links .dropdowndeservice li a:hover {
        background-color: var(--secondary-color) !important;
        color: var(--primary-color) !important;
        padding-left: 25px !important;
    }

    /* Les liens occupent tout l'espace vertical de la colonne */
    .link-column ul {
        flex: 1;
    }

    /* Arrow indicator for mega menu */
    .nav-item.mega-menu > .nav-link::after {
        content: '\f107';
        font-family: 'FontAwesome';
        margin-left: 6px;
        font-size: 12px;
        transition: transform 0.3s ease;
    }

    .nav-item.mega-menu:hover > .nav-link::after {
        transform: rotate(180deg);
    }

    /* DEBUG: Forcer l'affichage pour tester */
    /* Décommentez temporairement pour voir si le contenu existe */
    /*
    .mega-dropdown {
        opacity: 1 !important;
        visibility: visible !important;
        transform: translateY(0) !important;
        position: relative !important;
    }
    */
</style>

<div x-data="{ mobileMenuOpen: false, openSubmenus: {} }">
    <header class="main-header">
        <div class="header-sticky bg-section">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('storage/images/logo.svg') }}" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start (Desktop) -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <!-- Accueil -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                                </li>

                                <!-- Le centre équestre -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">Le centre équestre</a>
                                </li>

                                <!-- Méthode pédagogique -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('teaching') }}">Méthode pédagogique</a>
                                </li>

                                <!-- MEGA MENU : Activités & Galops -->
                                <li class="nav-item mega-menu">
                                    <a class="nav-link" href="{{ route('services') }}">Activités & Galops</a>

                                    <!-- Mega Dropdown -->
                                    <div class="mega-dropdown">
                                        <div class="mega-dropdown-grid">
                                            <!-- Colonne Gauche : Image -->
                                            <div class="mega-column-image" style="background-image: url('{{ asset('storage/images/about-us-img-1.jpg') }}');">
                                                <!-- Image en background CSS -->
                                            </div>

                                            <!-- Colonne Droite : 3 colonnes de liens -->
                                            <div class="mega-column-links">
                                                <div class="links-grid">
                                                    <!-- COLONNE 1 : Activités Principales -->
                                                    <div class="link-column">
                                                        <h4>Nos Activités</h4>
                                                        <ul class="dropdowndeservice">
                                                            <li><a href="{{ route('services.show', 'lecole-poney-des-2-ans') }}">L'École Poney (dès 2 ans)</a></li>
                                                            <li><a href="{{ route('services.show', 'lecole-cheval') }}">L'École Cheval</a></li>
                                                            <li><a href="{{ route('services.show', 'competition-et-coaching') }}">Compétition & Coaching</a></li>
                                                            <li><a href="{{ route('services.show', 'stages-activites') }}">Stages & Activités</a></li>
                                                        </ul>
                                                    </div>

                                                    <!-- COLONNE 2 : Autres Activités -->
                                                    <div class="link-column">
                                                        <h4>Autres Activités</h4>
                                                        <ul class="dropdowndeservice">
                                                            <li><a href="{{ route('services.show', 'laser-game-randonnees') }}">Laser Game & Randonnées</a></li>
                                                            <li><a href="{{ route('services.show', 'pension') }}">Pension</a></li>
                                                            <li><a href="{{ route('services.show', 'anniversaire') }}">Fêter son anniversaire</a></li>
                                                        </ul>
                                                    </div>

                                                    <!-- COLONNE 3 : Formations Galops -->
                                                    <div class="link-column">
                                                        <h4>Formations Galops</h4>
                                                        <ul class="dropdowndeservice">
                                                            <li><a href="{{ route('galop.1') }}">Galop 1</a></li>
                                                            <li><a href="{{ route('galop.2') }}">Galop 2</a></li>
                                                            <li><a href="{{ route('galop.3') }}">Galop 3</a></li>
                                                            <li><a href="{{ route('galop.4') }}">Galop 4</a></li>
                                                            <li><a href="{{ route('galop.5') }}">Galop 5</a></li>
                                                            <li><a href="{{ route('galop.6') }}">Galop 6</a></li>
                                                            <li><a href="{{ route('galop.7') }}">Galop 7</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="link-column">
                                                        <h4>Galops Poney</h4>
                                                        <ul class="dropdowndeservice">
                                                            <li><a href="{{ route('galops.poney.galop-bronze') }}" class="active">Galop Bronze</a></li>
                                                            <li><a href="{{ route('galops.poney.galop-argent') }}" class="active">Galop Argent</a></li>
                                                            <li><a href="{{ route('galops.poney.galop-or') }}" class="active">Galop Or</a></li>
                                                            <li><a href="{{ route('galops.poney.poney-bronze') }}" class="active">Poney Bronze</a></li>
                                                            <li><a href="{{ route('galops.poney.poney-argent') }}" class="active">Poney Argent</a></li>
                                                            <li><a href="{{ route('galops.poney.poney-or') }}" class="active">Poney Or</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item submenu">
                                    <a class="nav-link" href="{{ route('schedules') }}">Nos Programmes</a>
                                    <ul>
                                        <li><a href="{{ route('schedules.programmes') }}">Programmes</a></li>
                                        <li><a href="{{ route('schedules.cours-stages') }}">Cours et Stages</a></li>
                                        <li><a href="{{ route('schedules.randonnees') }}">Randonnées</a></li>
                                    </ul>
                                </li>

                                <!-- Tarifs -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('prices') }}">Tarifs</a>
                                </li>

                                <!-- Nos Programmes (avec submenu) -->

                            </ul>
                        </div>

                        <!-- Header Btn Start -->
                        <div class="header-btn" style="margin-right: 50px !important;">
                            <a href="{{ route('contact') }}" class="btn-default">Nous Contacter</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
                    <!-- Main Menu End -->

                    <!-- Mobile Toggle Button (Hamburger) -->
                    <button
                        class="navbar-toggle"
                        :class="{ 'active': mobileMenuOpen }"
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        aria-label="Toggle mobile menu"
                        type="button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </nav>

            <!-- Responsive Menu Container (Mobile) -->
            <div class="responsive-menu">
                <div
                    class="mobile-menu"
                    :class="{ 'active': mobileMenuOpen }"
                    x-cloak>

                    <!-- Mobile Menu Navigation -->
                    <ul class="mobile-menu-nav">
                        <!-- Accueil -->
                        <li><a href="{{ route('home') }}" @click="mobileMenuOpen = false">Accueil</a></li>

                        <!-- Le centre équestre -->
                        <li><a href="{{ route('about') }}" @click="mobileMenuOpen = false">Le centre équestre</a></li>

                        <!-- Méthode pédagogique -->
                        <li><a href="{{ route('teaching') }}" @click="mobileMenuOpen = false">Méthode pédagogique</a></li>

                        <!-- Activités & Galops (avec submenu mobile) -->
                        <li x-data="{ open: false }">
                            <a href="{{ route('services') }}" @click="mobileMenuOpen = false">Activités & Galops</a>
                            <span @click="open = !open" style="cursor: pointer; padding: 10px;">
                                <i class="fa-solid" :class="open ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
                            </span>

                            <ul x-show="open" x-collapse style="padding-left: 20px; margin-top: 10px;">
                                <li><strong style="color: var(--accent-color);">Activités</strong></li>
                                <li><a href="{{ route('services.show', 'lecole-poney-des-2-ans') }}" @click="mobileMenuOpen = false">L'École Poney</a></li>
                                <li><a href="{{ route('services.show', 'lecole-cheval') }}" @click="mobileMenuOpen = false">L'École Cheval</a></li>
                                <li><a href="{{ route('services.show', 'competition-et-coaching') }}" @click="mobileMenuOpen = false">Compétition & Coaching</a></li>
                                <li><a href="{{ route('services.show', 'stages-activites') }}" @click="mobileMenuOpen = false">Stages & Activités</a></li>
                                <li><a href="{{ route('services.show', 'laser-game-randonnees') }}" @click="mobileMenuOpen = false">Laser Game</a></li>
                                <li><a href="{{ route('services.show', 'pension') }}" @click="mobileMenuOpen = false">Pension</a></li>
                                <li><a href="{{ route('services.show', 'anniversaire') }}" @click="mobileMenuOpen = false">Anniversaire</a></li>

                                <li class="mt-3"><strong style="color: var(--accent-color);">Galops Chevaux</strong></li>
                                <li><a href="{{ route('galop.1') }}" @click="mobileMenuOpen = false">Galop 1</a></li>
                                <li><a href="{{ route('galop.2') }}" @click="mobileMenuOpen = false">Galop 2</a></li>
                                <li><a href="{{ route('galop.3') }}" @click="mobileMenuOpen = false">Galop 3</a></li>
                                <li><a href="{{ route('galop.4') }}" @click="mobileMenuOpen = false">Galop 4</a></li>
                                <li><a href="{{ route('galop.5') }}" @click="mobileMenuOpen = false">Galop 5</a></li>
                                <li><a href="{{ route('galop.6') }}" @click="mobileMenuOpen = false">Galop 6</a></li>
                                <li><a href="{{ route('galop.7') }}" @click="mobileMenuOpen = false">Galop 7</a></li>

                                <li class="mt-3"><strong style="color: var(--accent-color);">Galops Poneys</strong></li>
                                <li><a href="{{ route('galops.poney.galop-bronze') }}" @click="mobileMenuOpen = false">Galop Bronze</a></li>
                                <li><a href="{{ route('galops.poney.galop-argent') }}" @click="mobileMenuOpen = false">Galop Argent</a></li>
                                <li><a href="{{ route('galops.poney.galop-or') }}" @click="mobileMenuOpen = false">Galop Or</a></li>
                            </ul>
                        </li>

                        <!-- Tarifs -->
                        <li><a href="{{ route('prices') }}" @click="mobileMenuOpen = false">Tarifs</a></li>

                        <!-- Nos Programmes (avec submenu mobile) -->
                        <li x-data="{ open: false }">
                            <a href="{{ route('schedules') }}" @click="mobileMenuOpen = false">Nos Programmes</a>
                            <span @click="open = !open" style="cursor: pointer; padding: 10px;">
                                <i class="fa-solid" :class="open ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
                            </span>

                            <ul x-show="open" x-collapse style="padding-left: 20px; margin-top: 10px;">
                                <li><a href="{{ route('schedules.programmes') }}" @click="mobileMenuOpen = false">Programmes</a></li>
                                <li><a href="{{ route('schedules.cours-stages') }}" @click="mobileMenuOpen = false">Cours et Stages</a></li>
                                <li><a href="{{ route('schedules.randonnees') }}" @click="mobileMenuOpen = false">Randonnées</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Mobile Header Button -->
                    <div class="mobile-header-btn">
                        <a href="{{ route('contact') }}" class="btn-default" @click="mobileMenuOpen = false">Nous Contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
