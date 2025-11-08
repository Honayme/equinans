<div>
    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">L'Avis de nos Cavaliers</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Découvrez ce qu'ils disent de <span>Equinans</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Our Testimonials Content Start -->
                    <div class="our-testimonials-content">
                        <!-- Section Title Start -->
{{--                        <div class="testimonials-slider-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">What Our Riders Say</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Discover heartfelt stories & honest feedback from our riders & experience growth, joy & unforgettable moments.</p>
                        </div>--}}
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">

                                    <!-- Boucle sur les témoignages -->
                                    @forelse($testimonials as $testimonial)
                                        <!-- Testimonial Slide Start -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="testimonial-quote">
                                                    <img src="{{ asset('storage/images/testimonial-quote.svg') }}" alt="Quote">
                                                </div>
                                                <div class="testimonial-content">
                                                    <!-- Contenu dynamique -->
                                                    <p>{{ $testimonial->content }}</p>
                                                </div>
                                                <div class="testimonial-author">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <!-- Image dynamique -->
                                                            <img src="{{ asset('storage/' . $testimonial->image_path) }}" alt="{{ $testimonial->name }}">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <div class="author-content-title">
                                                            <!-- Nom dynamique -->
                                                            <h3>{{ $testimonial->name }}</h3>
                                                        </div>
                                                        <div class="testimonial-rating-icon">
                                                            <!-- Note dynamique -->
                                                            @for ($i = 0; $i < $testimonial->rating; $i++)
                                                                <i class="fa-solid fa-star"></i>
                                                            @endfor

                                                            <!-- Optionnel : Affiche des étoiles vides pour compléter à 5 -->
                                                            @for ($i = 0; $i < (5 - $testimonial->rating); $i++)
                                                                <i class="fa-regular fa-star" style="color: #ddd;"></i>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Testimonial Slide End -->
                                    @empty
                                        <!-- S'affiche si aucun témoignage n'est trouvé -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="testimonial-content">
                                                    <p>Aucun témoignage pour le moment.</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                    <!-- Fin de la boucle -->

                                </div>
                                <!-- Testimonial Button Start -->
                                <div class="testimonial-btn">
                                    <div class="testimonial-button-prev"></div>
                                    <div class="testimonial-button-next"></div>
                                </div>
                                <!-- Testimonial Button End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->
</div>
