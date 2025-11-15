<div>
    <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                @foreach($services as $index => $service)
                    @php
                        $iconIndex = (($index % 6) + 1);
                        $delay = $index * 0.1;
                    @endphp
                    <div class="col-lg-4 col-md-6">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="{{ $delay }}s">
                            <!-- Service Item Header Start -->
                            <div class="service-item-header">
                                <div class="service-item-title">
                                    <p>{{ str_pad($service->order, 2, '0', STR_PAD_LEFT) }}</p>
                                    <h3><a href="{{ route('services.show', $service->slug) }}">{{ $service->title }}</a></h3>
                                </div>
                                <div class="icon-box">
                                    <img src="{{ asset('storage/images/icon-service-' . $iconIndex . '.svg') }}" alt="">
                                </div>
                            </div>
                            <!-- Service Item Header End -->

                            <!-- Service Item Content Start -->
                            <div class="service-item-content">
                                <p>{{ $service->introduction ?? 'Découvrez nos services équestres de qualité.' }}</p>
                            </div>
                            <!-- Service Item Content End -->

                            <!-- Service Image Start -->
                            <div class="service-image">
                                <a href="{{ route('services.show', $service->slug) }}" data-cursor-text="View">
                                    <figure class="image-anime">
                                        @php
                                            // Utiliser l'image personnalisée si définie dans le contenu, sinon l'image par défaut
                                            $customImage = $service->content['image'] ?? null;
                                            $imagePath = $customImage
                                                ? 'storage/' . $customImage
                                                : 'storage/images/service-' . $iconIndex . '.jpg';
                                        @endphp
                                        <img src="{{ asset($imagePath) }}" alt="{{ $service->title }}">
                                    </figure>
                                </a>
                            </div>
                            <!-- Service Image End -->
                        </div>
                        <!-- Service Item End -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Page Services End -->
</div>
