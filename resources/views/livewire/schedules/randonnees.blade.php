<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Randonnées <span>Équestres</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('schedules') }}">Nos Programmes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Randonnées</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Randonnées Content Start -->
    <div class="page-service-single">
        <div class="container">
            <!-- Introduction -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Partez à l'Aventure</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Découvrez nos parcours de randonnées équestres en pleine nature. Une expérience unique pour explorer les paysages environnants à cheval ou à poney, encadrés par nos moniteurs diplômés.
                        </p>
                    </div>
                </div>
            </div>

            <!-- PDF Documents -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <livewire:pdf-viewer
                        :pdfUrl="asset('storage/programmes/randonnée.pdf')"
                        :titre="'Programme Randonnées'"
                        :buttonClass="'btn-default'"
                        :downloadText="'Télécharger le programme'"
                    />
                </div>
            </div>
        </div>
    </div>
    <!-- Randonnées Content End -->
</div>
