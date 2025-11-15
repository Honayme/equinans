<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie" style="background-image: url('{{ asset('storage/hero-section/background-equinans.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Activités & <span>Services</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Activités & Services</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Services Cards Start -->
    <livewire:partials.services-cards />
    <!-- Services Cards End -->

    <!-- What We Do Section Start -->
    <div id="galops" class="what-we-do bg-section dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- What We Do images Start -->
                    <div class="what-we-do-images wow fadeInUp">
                        <!-- What Do image 1 Start -->
                        <div class="what-do-image-1">
                            <figure class="image-anime">
                                <img src="{{ asset('storage/photo-poney.jpg') }}" alt="Formation Galop Poney">
                            </figure>
                        </div>
                        <!-- What Do image 1 End -->

                        <!-- What Do image 2 Start -->
                        <div class="what-do-image-2">
                            <figure class="image-anime">
                                <img src="{{ asset('storage/photo-cheval.jpg') }}" alt="Formation Galop Cheval">
                            </figure>
                        </div>
                        <!-- What Do image 2 End -->

                        <!-- Contact Us Circle Start -->
                        <div class="contact-us-circle">
                            <a href="contact.html"><img src="{{ asset('storage/images/contact-us-circle.svg') }}" alt=""></a>
                        </div>
                        <!-- Contact Us Circle End -->
                    </div>
                    <!-- What We Do images End -->
                </div>

                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Passez vos Galops®</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Passez vos Galops® avec <span>Equinans</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Fier partenaire de la Fédération Française d'Équitation (FFE), Equinans est un centre agréé pour l'organisation et la validation des examens fédéraux des Galops®. Que vous soyez cavalier à poney ou à cheval, notre équipe d'enseignants diplômés vous accompagne dans votre progression pour vous préparer et vous présenter aux différents niveaux. Profitez d'un encadrement de qualité pour certifier vos compétences et atteindre vos objectifs.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- What We Do Body Start -->
                        <div class="what-we-do-body">
                            <!-- What We Item List Title Start -->
                            <div class="what-we-item-list-title wow fadeInUp" data-wow-delay="0.4s">
                                <h3>Choisissez votre parcours :</h3>
                            </div>
                            <!-- What We Item List Title End -->

                            <!-- What We Item List Start -->
                            <div class="what-we-item-list wow fadeInUp" data-wow-delay="0.6s">
                                <!-- What We Item Start -->
                                <a href="{{ route('galops.poney.galop-bronze') }}" id="galop-poney" class="what-we-item text-decoration-none">
                                    <div class="icon-box">
                                        <img src="{{ asset('storage/images/icon-what-we-item-1.svg') }}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Galops Poney</h3>
                                        <p>Découvrez les Galops Bronze, Argent et Or pour les jeunes cavaliers à poney.</p>
                                    </div>
                                </a>
                                <!-- What We Item End -->

                                <!-- What We Item Start -->
                                <a href="{{ route('galop.1') }}" id="galop-cheval" class="what-we-item text-decoration-none">
                                    <div class="icon-box">
                                        <img src="{{ asset('storage/images/icon-what-we-item-2.svg') }}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Galops Cheval</h3>
                                        <p>Progressez du Galop 1 au Galop 7 avec nos enseignants diplômés.</p>
                                    </div>
                                </a>
                                <!-- What We Item End -->
                            </div>
                            <!-- What We Item List End -->
                        </div>
                        <!-- What We Do Body End -->
                    </div>
                    <!-- What We Do Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->

    <!-- Our Benefits Section Start -->
    <div id="espace-cavalier" class="our-benefits">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Club Benefits</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Exceptional benefits that set our <span>horse club apart</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                        <p>Enjoy hands-on training, gentle horses, and an environment designed to help you relax, grow, and
                            fall in love with riding - whether it's your first time or your fiftieth.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Benefits Content Start -->
                    <div class="our-benefit-content">
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="benefit_accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="benefit_heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#benefit_collapse1" aria-expanded="true"
                                            aria-controls="benefit_collapse1">
                                        Personalized Rider Development
                                    </button>
                                </h2>
                                <div id="benefit_collapse1" class="accordion-collapse collapse show"
                                     aria-labelledby="benefit_heading1" data-bs-parent="#benefit_accordion">
                                    <div class="accordion-body">
                                        <p>Each rider receives individual attention to grow their confidence, refine their
                                            technique, and reach their full potential.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="benefit_heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#benefit_collapse2" aria-expanded="false"
                                            aria-controls="benefit_collapse2">
                                        Well-Trained & Gentle Horses
                                    </button>
                                </h2>
                                <div id="benefit_collapse2" class="accordion-collapse collapse"
                                     aria-labelledby="benefit_heading2" data-bs-parent="#benefit_accordion">
                                    <div class="accordion-body">
                                        <p>We track key performance indicators(KPIs) such as website, conversion,
                                            click-through rates (CTR), ROI.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="benefit_heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#benefit_collapse3" aria-expanded="false"
                                            aria-controls="benefit_collapse3">
                                        Peaceful Countryside Setting
                                    </button>
                                </h2>
                                <div id="benefit_collapse3" class="accordion-collapse collapse"
                                     aria-labelledby="benefit_heading3" data-bs-parent="#benefit_accordion">
                                    <div class="accordion-body">
                                        <p>We track key performance indicators(KPIs) such as website, conversion,
                                            click-through rates (CTR), ROI.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->

                        <!-- Our Benefits Button Start -->
                        <div class="our-benefit-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="contact.html" class="btn-default">Contact Us Today!</a>
                        </div>
                        <!-- Our Benefits Button End -->
                    </div>
                    <!-- Our Benefits Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Benefits images Start -->
                    <div class="benefits-images">
                        <!-- Benefits image Box Start -->
                        <div class="benefits-image-box-1">
                            <div class="benefits-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('storage/images/benefits-image-1.jpg') }}" alt="">
                                </figure>
                            </div>

                            <!-- Benefits image Counter Start -->
                            <div class="benefits-image-counter">
                                <h2><span class="counter">98</span>%</h2>
                                <p>Events, Shows & Rides Hosted</p>
                            </div>
                            <!-- Benefits image Counter End -->
                        </div>
                        <!-- Benefits image Box End -->

                        <!-- Benefits image Box Start -->
                        <div class="benefits-image-box-2">
                            <div class="benefits-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('storage/images/benefits-image-2.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Contact Us Circle Start -->
                            <div class="contact-us-circle">
                                <a href="contact.html"><img src="images/contact-us-circle.svg" alt=""></a>
                            </div>
                            <!-- Contact Us Circle End -->
                        </div>
                        <!-- Benefits image Box End -->
                    </div>
                    <!-- What We Do images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Benefits Section End -->

    <!-- CTA Box Section Start -->
{{--    <div class="cta-box-section bg-section dark-section parallaxie">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <!-- CTA Box Start -->--}}
{{--                    <div class="cta-box">--}}
{{--                        <!-- CTA Box Content Start -->--}}
{{--                        <div class="cta-box-content">--}}
{{--                            <!-- Section Title Start -->--}}
{{--                            <div class="section-title">--}}
{{--                                <h3 class="wow fadeInUp">Ready to Ride? Contact Us Today!</h3>--}}
{{--                                <h2 class="text-anime-style-2" data-cursor="-opaque">Connect with us and experience <span>personalized guidance</span>--}}
{{--                                </h2>--}}
{{--                                <p class="wow fadeInUp" data-wow-delay="0.2s">Whether you're a first-time rider or a--}}
{{--                                    seasoned equestrian, our dedicated team is here to provide personalized guidance--}}
{{--                                    tailored to your goals.</p>--}}
{{--                            </div>--}}
{{--                            <!-- Section Title End -->--}}

{{--                            <!-- CTA Box Body Start -->--}}
{{--                            <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                                <a href="contact.html" class="btn-default btn-highlighted">Contact us today</a>--}}
{{--                            </div>--}}
{{--                            <!-- CTA Box Body End -->--}}

{{--                            <div class="cta-box-list wow fadeInUp" data-wow-delay="0.6s">--}}
{{--                                <ul>--}}
{{--                                    <li>Expert Riding Lessons</li>--}}
{{--                                    <li>Trail Riding Adventures</li>--}}
{{--                                    <li>Community & Events</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- CTA Box Content End -->--}}

{{--                        <!-- CTA Box Image Start -->--}}
{{--                        <div class="cta-box-image">--}}
{{--                            <figure>--}}
{{--                                <img src="{{ asset('storage/images/cta-box-image.png') }}" alt="">--}}
{{--                            </figure>--}}
{{--                        </div>--}}
{{--                        <!-- CTA Box Image End -->--}}
{{--                    </div>--}}
{{--                    <!-- CTA Box End -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <!-- CTA Box Section End -->

    <!-- Our Testimonial Section Start -->
{{--    <livewire:partials.testimonial />--}}
    <!-- Our Testimonial Section End -->

</div>
