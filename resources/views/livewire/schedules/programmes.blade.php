<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Programmes <span>Été 2025</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('schedules') }}">Nos Programmes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Programmes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Programmes Content Start -->
    <div class="page-service-single">
        <div class="container">
            <!-- Introduction -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Programme Général Été 2025</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Découvrez notre programme complet pour l'été 2025. Consultez nos horaires, activités et événements spéciaux pour profiter pleinement de votre saison équestre.
                        </p>
                    </div>
                </div>
            </div>

            <!-- PDF Documents -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <livewire:pdf-viewer
                        :pdfUrl="asset('storage/programmes/été 2025.pdf')"
                        :titre="'Programme Été 2025'"
                        :buttonClass="'btn-default'"
                        :downloadText="'Télécharger le programme'"
                    />
                </div>
            </div>
        </div>
    </div>
    <!-- Programmes Content End -->
</div>
