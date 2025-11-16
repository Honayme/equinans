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
                                <img src="{{ asset('storage/photo-cheval.jpg') }}" alt="Formation Galop Cheval" >
                            </figure>
                        </div>
                        <!-- What Do image 2 End -->

                        <!-- Contact Us Circle Start -->
                        <div class="contact-us-circle">
                            <a href="{{ route('contact') }}" style="border: none !important"><img src="{{ asset('storage/images/contact-us-circle.svg') }}" alt=""></a>
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
    <div id="programmes-hub" class="our-benefits">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">L'AVENTURE VOUS ATTEND</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Vivez votre passion avec nos <span>programmes 2025</span>
                        </h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                        <p>Que vous soyez en quête d'évasion, désireux de vous perfectionner ou à la recherche de nouveaux défis, notre saison 2025 est faite pour vous. Explorez nos activités conçues avec passion pour toute la famille.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-benefit-content">
                        <div class="faq-accordion" id="program_accordion"> <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="program_heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#program_collapse1" aria-expanded="true"
                                            aria-controls="program_collapse1">
                                        Randonnées & Évasion
                                    </button>
                                </h2>
                                <div id="program_collapse1" class="accordion-collapse collapse show"
                                     aria-labelledby="program_heading1" data-bs-parent="#program_accordion">
                                    <div class="accordion-body">
                                        <p>Évadez-vous le temps d'une journée ou plus ! Nos nouvelles randonnées de l'été 2025 vous emmènent à travers des paysages magnifiques, pour un moment de pur plaisir et de connexion avec la nature.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="program_heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#program_collapse2" aria-expanded="false"
                                            aria-controls="program_collapse2">
                                        Stages & Perfectionnement
                                    </button>
                                </h2>
                                <div id="program_collapse2" class="accordion-collapse collapse"
                                     aria-labelledby="program_heading2" data-bs-parent="#program_accordion">
                                    <div class="accordion-body">
                                        <p>Du débutant au cavalier confirmé, nos stages (cheval et poney) sont pensés pour votre progression. Encadrés par nos moniteurs diplômés, venez vous perfectionner dans une ambiance conviviale et bienveillante.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="program_heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#program_collapse3" aria-expanded="false"
                                            aria-controls="program_collapse3">
                                        Nouvel Espace Cavalier
                                    </button>
                                </h2>
                                <div id="program_collapse3" class="accordion-collapse collapse"
                                     aria-labelledby="program_heading3" data-bs-parent="#program_accordion">
                                    <div class="accordion-body">
                                        <p>Une nouvelle ressource en ligne ! Accédez à votre espace pour consulter et télécharger des parcours et reprises (cheval et poney) pour vous entraîner et préparer vos prochaines séances.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="our-benefit-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="{{ route('schedules') }}" class="btn-default">Voir tous les programmes</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="benefits-images">
                        <div class="benefits-image-box-1">
                            <div class="benefits-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('storage/images_gallery/gallery-40.jpg') }}" alt="Randonnée équestre">
                                </figure>
                            </div>

                            <div class="benefits-image-counter">
                                <h2><span class="counter">100</span>%</h2> <p>Passion & Plaisir Partagé</p>
                            </div>
                        </div>
                        <div class="benefits-image-box-2">
                            <div class="benefits-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('storage/images_gallery/gallery-31.jpg') }}" alt="Randonnée équestre">
                                </figure>
                            </div>
                            <div class="contact-us-circle">
                                <a href="{{ route('contact') }}" style="border: none !important"><img src="{{ asset('storage/images/contact-us-circle.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Benefits Section End -->

</div>
