<div>
    <!-- Topbar Section Start -->
    <div class="topbar bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li><img src="{{ asset('storage/images/icon-phone-accent.svg') }}" alt=""><span>Téléphone: </span><a href="tel:{{ settings()->phone }}">{{ settings()->phone }}</a></li>
                            <li><img src="{{ asset('storage/images/icon-mail-accent.svg') }}" alt=""><span>Email: </span><a href="mailto:{{ settings()->email }}">{{ settings()->email }}</a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>

                <div class="col-lg-5 col-md-5">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            @if(settings()->facebook_url)
                                <li><a href="{{ settings()->facebook_url }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            @endif
                        </ul>
                        <p>Suivez nous sur les réseaux</p>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->
</div>
