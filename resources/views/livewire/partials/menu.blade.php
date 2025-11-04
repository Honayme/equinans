<div x-data="{ mobileMenuOpen: false, openSubmenus: {} }">
    <header class="main-header">
        <div class="header-sticky bg-section">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="./">
                        <img src="{{ asset('storage/images/logo.svg') }}" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start (Desktop) -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Le centre équestre</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Activités & Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('prices') }}">Tarifs</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Nous Contacter</a></li>
                            </ul>
                        </div>

                        <!-- Header Btn Start -->
                        <div class="header-btn">
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

            <!-- Responsive Menu Container (SlickNav replacement) -->
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

                        <!-- Activités & Services -->
                        <li><a href="{{ route('services') }}" @click="mobileMenuOpen = false">Activités & Services</a></li>

                        <!-- Tarifs -->
                        <li><a href="{{ route('prices') }}" @click="mobileMenuOpen = false">Tarifs</a></li>

                        <!-- Nous Contacter -->
                        <li><a href="{{ route('contact') }}" @click="mobileMenuOpen = false">Nous Contacter</a></li>
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
