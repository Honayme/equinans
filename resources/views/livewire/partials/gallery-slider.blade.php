<div>
    <div class="our-gallery">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Notre Galerie</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Découvrez la beauté et la passion de notre <span>centre équestre</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('gallery') }}" class="btn-default">Voir la Galerie</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <!-- Gallery Ticker Box Start -->
                    <div class="gallery-ticker-box">
                        <!-- Scrolling Ticker Item Start (First Row) -->
                        <div class="scrolling-ticker-item gallery-items">
                            <div class="scrolling-content">
                                @foreach($firstRow as $image)
                                    <a href="{{ $image['url'] }}" data-cursor-text="Voir">
                                        <img src="{{ $image['thumbnail'] }}"
                                             alt="{{ $image['alt'] }}"
                                             loading="lazy">
                                    </a>
                                @endforeach
                            </div>

                            <div class="scrolling-content">
                                @foreach($firstRow as $image)
                                    <a href="{{ $image['url'] }}" data-cursor-text="Voir">
                                        <img src="{{ $image['thumbnail'] }}"
                                             alt="{{ $image['alt'] }}"
                                             loading="lazy">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <!-- Scrolling Ticker Item End -->

                        <!-- Scrolling Ticker Item Start (Second Row - Reverse) -->
                        <div class="scrolling-ticker-item gallery-items scroll-reverse">
                            <div class="scrolling-content">
                                @foreach($secondRow as $image)
                                    <a href="{{ $image['url'] }}" data-cursor-text="Voir">
                                        <img src="{{ $image['thumbnail'] }}"
                                             alt="{{ $image['alt'] }}"
                                             loading="lazy">
                                    </a>
                                @endforeach
                            </div>

                            <div class="scrolling-content">
                                @foreach($secondRow as $image)
                                    <a href="{{ $image['url'] }}" data-cursor-text="Voir">
                                        <img src="{{ $image['thumbnail'] }}"
                                             alt="{{ $image['alt'] }}"
                                             loading="lazy">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <!-- Scrolling Ticker Item End -->
                    </div>
                    <!-- Gallery Ticker Box End -->
                </div>
            </div>
        </div>
    </div>
</div>
