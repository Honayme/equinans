<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie" style="background-image: url('{{ asset('storage/hero-section/background-equinans.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Notre <span>Galerie</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Notre Galerie</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Photo Gallery Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                @foreach($images as $index => $image)
                    <div class="col-lg-4 col-6">
                        <!-- Image Gallery start -->
                        <div class="photo-gallery wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                            <a href="{{ $image['url'] }}" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="{{ $image['thumbnail'] }}" alt="{{ $image['alt'] }}" loading="lazy">
                                </figure>
                            </a>
                        </div>
                        <!-- Image Gallery end -->
                    </div>
                @endforeach
            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Photo Gallery End -->
</div>
