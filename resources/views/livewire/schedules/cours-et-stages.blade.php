<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Cours et <span>Stages</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('schedules') }}">Nos Programmes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cours et Stages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Cours et Stages Content Start -->
    <div class="page-service-single">
        <div class="container">
            <!-- Introduction -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Nos Cours et Stages</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Consultez nos différents programmes de stages pour chevaux et poneys. Des stages thématiques organisés pendant les vacances scolaires pour progresser tout en s'amusant.
                        </p>
                    </div>
                </div>
            </div>

            <!-- PDF Documents -->
            <div class="row g-4">
                <!-- Cours et Stages Général -->
                <div class="col-lg-4 col-md-6">
                    <livewire:pdf-viewer
                        :pdfUrl="asset('storage/programmes/cours_et_stages.pdf')"
                        :titre="'Cours et Stages'"
                        :buttonClass="'btn-default'"
                        :downloadText="'Télécharger'"
                    />
                </div>

                <!-- Stages Chevaux Toussaint -->
                <div class="col-lg-4 col-md-6">
                    <livewire:pdf-viewer
                        :pdfUrl="asset('storage/programmes/stages chevaux toussaint 2025.pdf')"
                        :titre="'Stages Chevaux Toussaint 2025'"
                        :buttonClass="'btn-default'"
                        :downloadText="'Télécharger'"
                    />
                </div>

                <!-- Stages Poneys Toussaint -->
                <div class="col-lg-4 col-md-6">
                    <livewire:pdf-viewer
                        :pdfUrl="asset('storage/programmes/stages po toussaint 2025.pdf')"
                        :titre="'Stages Poneys Toussaint 2025'"
                        :buttonClass="'btn-default'"
                        :downloadText="'Télécharger'"
                    />
                </div>
            </div>
        </div>
    </div>
    <!-- Cours et Stages Content End -->
</div>
