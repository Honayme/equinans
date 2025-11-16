<div>
    <footer class="main-footer bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo footer-logo-container" style="">
                            <img src="{{ asset('storage/images/logo-medaillon.png') }}"
                                 alt="Logo">

                            <div class="footer-text">
                                <p class="footer-title">Centre Equestre</p>
                                <p class="footer-location">NANS LES PINS</p>
                            </div>
                        </div>
                        <!-- Footer Logo End -->
                        <!-- About Footer Content End -->

                        <!-- Footer Google Map Start -->
                        <div class="footer-google-map rounded-3 border border-3 border-warning shadow-lg overflow-hidden">
                            <iframe
                                src="https://maps.google.com/maps?q={{ urlencode(settings()->address) }}&output=embed"
                                class="w-100"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <!-- Footer Google Map End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-8">
                    <!-- Footer Links Box Start -->
                    <div class="footer-links-box">
                        <!-- Footer Links Start -->
                        <div class="footer-links quick-links">
                            <h3>Liens rapides</h3>
                            <ul>
                                <li><a href="{{ route('home') }}">Accueil</a></li>
                                <li><a href="{{ route('about') }}">Le centre équestre</a></li>
                                <li><a href="{{ route('services') }}">Activités & Services</a></li>
                                <li><a href="{{ route('schedules') }}">Nos Programmes</a></li>
                                <li><a href="{{ route('prices') }}">Tarifs</a></li>
                                <li><a href="{{ route('legal.reglement') }}">Règlement intérieur</a></li>
                                <li><a href="{{ route('legal.informations') }}">Informations Légales</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links service-links">
                            <h3>Nos Activités</h3>
                            <ul>
                                <li><a href="{{ route('services.show', 'lecole-poney-des-2-ans') }}">L'École Poney</a></li>
                                <li><a href="{{ route('services.show', 'lecole-cheval') }}">L'École Cheval</a></li>
                                <li><a href="{{ route('services.show', 'laser-game-randonnees') }}">Laser Game</a></li>
                                <li><a href="{{ route('services.show', 'tir-a-larc') }}">Tir à l'arc</a></li>
                                <li><a href="{{ route('services.show', 'pension') }}">Pension</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links footer-contact-links">
                            <h3>Contact Information</h3>

                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="{{ asset('storage/images/icon-phone-white.svg') }}" alt="">
                                </div>
                                <div class="footer-contact-content">
                                    <h3>Téléphone</h3>
                                    <p><a href="tel:{{ settings()->phone }}">{{ settings()->phone }}</a></p>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->

                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="{{ asset('storage/images/icon-mail-white.svg') }}" alt="">
                                </div>
                                <div class="footer-contact-content">
                                    <h3>Email</h3>
                                    <p><a href="mailto:{{ settings()->email }}">{{ settings()->email }}</a></p>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    <!-- Footer Links Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright">
                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2025 All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright Text End -->

                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <ul>
                                @if(settings()->facebook_url)
                                    <li><a href="{{ settings()->facebook_url }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                @endif
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->
                    </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
        </div>
    </footer>
</div>
