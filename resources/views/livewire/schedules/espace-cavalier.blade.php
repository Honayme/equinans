<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Espace <span>Cavalier</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('schedules') }}">Nos Programmes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Espace Cavalier</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Espace Cavalier Content Start -->
    <div class="page-service-single">
        <div class="container">
            <!-- Introduction -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Découvrez nos espaces cavaliers</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Consultez les programmes dédiés aux cavaliers, que vous montiez à cheval ou à poney.
                            Retrouvez toutes les informations sur les activités et parcours adaptés à votre niveau.
                        </p>
                    </div>
                </div>
            </div>

            <!-- PDF Documents -->
            <div class="row g-4">
                <!-- PDF Espace Cavalier Cheval -->
                <div class="col-lg-6">
                    <livewire:pdf-viewer
                        :pdfUrl="asset('storage/programmes/cavalier-cheval.pdf')"
                        :titre="'Espace Cavalier Cheval'"
                        :buttonClass="'btn-default'"
                        :downloadText="'Télécharger le PDF'"
                    />
                </div>

                <!-- PDF Espace Cavalier Poney -->
                <div class="col-lg-6">
                    <livewire:pdf-viewer
                        :pdfUrl="asset('storage/programmes/cavalier-poneys.pdf')"
                        :titre="'Espace Cavalier Poney'"
                        :buttonClass="'btn-default'"
                        :downloadText="'Télécharger le PDF'"
                    />
                </div>
            </div>
        </div>
    </div>
    <!-- Espace Cavalier Content End -->
</div>
