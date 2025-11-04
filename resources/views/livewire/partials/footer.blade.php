<div>
    <footer class="main-footer bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ asset('storage/images/footer-logo.svg') }}" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>Whether you're trotting for the first time or mastering advanced techniques.</p>
                        </div>
                        <!-- About Footer Content End -->

                        <!-- Footer Newsletter Box Start -->
                        <div class="footer-newsletter-form">
                            <form id="newslettersForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control" id="mail" placeholder="Enter Your Email Address *" required>
                                    <button type="submit" class="newsletter-btn"><i class="fa-regular fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Footer Newsletter Box End -->
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
                                <li><a href="{{ route('prices') }}">Tarifs</a></li>
                                <li><a href="{{ route('contact') }}">Nous Contacter</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links service-links">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="service-single.html">Horse Riding Lessons</a></li>
                                <li><a href="service-single.html">Horse Training Services</a></li>
                                <li><a href="service-single.html">Grooming & Horse Care</a></li>
                                <li><a href="service-single.html">Beginner Riding Program</a></li>
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
