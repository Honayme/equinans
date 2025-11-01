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
                                <li class="nav-item submenu"><a class="nav-link" href="./">Home</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="index.html">Home - Main</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-video.html">Home - Video</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-slider.html">Home - Slider</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="service-single.html">Service Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team-single.html">Team Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing Plan</a></li>
                                        <li class="nav-item"><a class="nav-link" href="testimonials.html">Testimonials</a></li>
                                        <li class="nav-item"><a class="nav-link" href="image-gallery.html">Image Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="video-gallery.html">Video Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="faqs.html">FAQs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="contact.html" class="btn-default">Get Consult</a>
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
                        <!-- Home with Submenu -->
                        <li
                            class="submenu"
                            :class="{ 'active': openSubmenus['home'] }">
                            <button
                                class="submenu-toggle"
                                @click="openSubmenus['home'] = !openSubmenus['home']"
                                type="button">
                                Home
                                <span class="submenu-arrow"></span>
                            </button>
                            <ul>
                                <li><a href="index.html" @click="mobileMenuOpen = false">Home - Main</a></li>
                                <li><a href="index-video.html" @click="mobileMenuOpen = false">Home - Video</a></li>
                                <li><a href="index-slider.html" @click="mobileMenuOpen = false">Home - Slider</a></li>
                            </ul>
                        </li>

                        <!-- About Us -->
                        <li><a href="about.html" @click="mobileMenuOpen = false">About Us</a></li>

                        <!-- Services -->
                        <li><a href="services.html" @click="mobileMenuOpen = false">Services</a></li>

                        <!-- Blog -->
                        <li><a href="blog.html" @click="mobileMenuOpen = false">Blog</a></li>

                        <!-- Pages with Submenu -->
                        <li
                            class="submenu"
                            :class="{ 'active': openSubmenus['pages'] }">
                            <button
                                class="submenu-toggle"
                                @click="openSubmenus['pages'] = !openSubmenus['pages']"
                                type="button">
                                Pages
                                <span class="submenu-arrow"></span>
                            </button>
                            <ul>
                                <li><a href="service-single.html" @click="mobileMenuOpen = false">Service Details</a></li>
                                <li><a href="blog-single.html" @click="mobileMenuOpen = false">Blog Details</a></li>
                                <li><a href="team.html" @click="mobileMenuOpen = false">Our Team</a></li>
                                <li><a href="team-single.html" @click="mobileMenuOpen = false">Team Details</a></li>
                                <li><a href="pricing.html" @click="mobileMenuOpen = false">Pricing Plan</a></li>
                                <li><a href="testimonials.html" @click="mobileMenuOpen = false">Testimonials</a></li>
                                <li><a href="image-gallery.html" @click="mobileMenuOpen = false">Image Gallery</a></li>
                                <li><a href="video-gallery.html" @click="mobileMenuOpen = false">Video Gallery</a></li>
                                <li><a href="faqs.html" @click="mobileMenuOpen = false">FAQs</a></li>
                                <li><a href="404.html" @click="mobileMenuOpen = false">404</a></li>
                            </ul>
                        </li>

                        <!-- Contact Us -->
                        <li><a href="contact.html" @click="mobileMenuOpen = false">Contact Us</a></li>
                    </ul>

                    <!-- Mobile Header Button -->
                    <div class="mobile-header-btn">
                        <a href="contact.html" class="btn-default" @click="mobileMenuOpen = false">Get Consult</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
