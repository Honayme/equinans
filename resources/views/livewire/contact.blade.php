<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Contact Us</h3>
                            <h2 class="wow fadeInUp" data-cursor="-opaque">Get in touch <span>with rideup</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Have questions about our training programs or
                                memberships? Our friendly team is here to assist you. Let's start your riding journey
                                together!</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
                              data-wow-delay="0.4s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name"
                                           required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name"
                                           required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone No."
                                           required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                           placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                <textarea name="message" class="form-control" id="message" rows="4"
                                          placeholder="Write Message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default"><span>submit now</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Form End -->
                </div>

                <div class="col-lg-6">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
                        <iframe
                            src="https://maps.google.com/maps?q={{ urlencode(settings()->address) }}&output=embed"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>

                <div class="col-lg-12">
                    <!-- Contact Info List Start -->
                    <div class="contact-info-list">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('storage/images/icon-phone-white.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Téléphone</h3>
                                <p><a href="tel:{{ settings()->phone }}">{{ settings()->phone }}</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('storage/images/icon-mail-white.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Email</h3>
                                <p><a href="mailto:{{ settings()->email }}">{{ settings()->email }}</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('storage/images/icon-location-white.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Adresse</h3>
                                <p>{{ settings()->address }}</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('storage/images/icon-clock-white.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Horaires d'ouverture</h3>
                                <p>{!! nl2br(e(settings()->opening_hours)) !!}</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info List Start -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->


</div>
