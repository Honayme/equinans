<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Nos <span>Programmes</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nos Programmes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                <!-- Card 1 : Programmes -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp">
                        <div class="service-item-header">
                            <div class="service-item-title">
                                <p>01</p>
                                <h3><a href="{{ route('schedules.programmes') }}">Programmes</a></h3>
                            </div>
                            <div class="icon-box">
                                <img src="{{ asset('storage/images/icon-service-1.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-item-content">
                            <p>Consultez notre programme général et découvrez toutes nos activités pour l'été 2025.</p>
                        </div>
                        <div class="service-image">
                            <a href="{{ route('schedules.programmes') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('storage/images/service-1.jpg') }}" alt="Programmes">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 : Cours et Stages -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item-header">
                            <div class="service-item-title">
                                <p>02</p>
                                <h3><a href="{{ route('schedules.cours-stages') }}">Cours et Stages</a></h3>
                            </div>
                            <div class="icon-box">
                                <img src="{{ asset('storage/images/icon-service-2.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-item-content">
                            <p>Découvrez nos stages pour chevaux et poneys, ainsi que nos cours tout au long de l'année.</p>
                        </div>
                        <div class="service-image">
                            <a href="{{ route('schedules.cours-stages') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('storage/images/service-2.jpg') }}" alt="Cours et Stages">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 : Randonnées -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item-header">
                            <div class="service-item-title">
                                <p>03</p>
                                <h3><a href="{{ route('schedules.randonnees') }}">Randonnées</a></h3>
                            </div>
                            <div class="icon-box">
                                <img src="{{ asset('storage/images/icon-service-3.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-item-content">
                            <p>Explorez nos parcours de randonnées équestres et partez à l'aventure en pleine nature.</p>
                        </div>
                        <div class="service-image">
                            <a href="{{ route('schedules.randonnees') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('storage/images/service-3.jpg') }}" alt="Randonnées">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services End -->
</div>
