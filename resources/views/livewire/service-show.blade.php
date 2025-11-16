<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $service->title }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <div class="page-category-list wow fadeInUp">
                            <h3>Nos Services</h3>
                            <ul id="services">
                                @foreach($allServices as $s)
                                    <li class="{{ $s->slug === $service->slug ? 'active' : '' }}">
                                        <a href="{{ route('services.show', $s->slug) }}">{{ $s->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="sidebar-cta-header">
                                <div class="satisfy-client-images">
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('storage/images/author-1.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('storage/images/author-2.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('storage/images/author-3.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image add-more">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <div class="sidebar-cta-content">
                                    <p>Plus de 300 cavaliers nous font confiance</p>
                                </div>
                            </div>

                            <div class="sidebar-contact-list">
                                <div class="sidebar-contact-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('storage/images/icon-phone-primary.svg') }}" alt="">
                                    </div>
                                    <div class="sidebar-contact-content">
                                        <p>Appelez-nous :</p>
                                        <h3><a href="tel:0676122225">06 76 12 22 25</a></h3>
                                    </div>
                                </div>

                                <div class="sidebar-contact-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('storage/images/icon-mail-primary.svg') }}" alt="">
                                    </div>
                                    <div class="sidebar-contact-content">
                                        <p>Email :</p>
                                        <h3><a href="mailto:contact@equinans.fr">contact@equinans.fr</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <div class="service-single-content">
                        @if($service->slug !== 'anniversaire')
                            <div class="page-single-image">
                                <figure class="image-anime reveal">
                                    @php
                                        // Utiliser l'image personnalisée si définie dans le contenu, sinon l'image par défaut
                                        $customImage = $content['image'] ?? null;
                                        $imagePath = $customImage
                                            ? 'storage/' . $customImage
                                            : 'storage/images/service-' . $service->order . '.jpg';
                                    @endphp
                                    <img src="{{ asset($imagePath) }}" alt="{{ $service->title }}">
                                </figure>
                            </div>
                        @endif

                        {{-- PDF Viewer pour Compétition & Coaching --}}
                        @if($service->slug === 'competition-et-coaching')
                            <div class="wow fadeInUp" data-wow-delay="0.2s" style="margin-top: 2rem;">
                                @livewire('pdf-viewer', [
                                    'pdfUrl' => asset('storage/programmes/Parcours.pdf'),
                                    'titre' => 'Parcours de Compétition',
                                    'buttonClass' => 'btn btn-primary',
                                    'downloadText' => 'Télécharger le PDF'
                                ])
                            </div>
                        @endif

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            @php
                                $content = $service->content ?? [];
                            @endphp

                            @if($service->slug === 'anniversaire')
                                <h2>Organiser son anniversaire à <span>Équinans</span></h2>
                            @endif

                            {{-- Introduction --}}
                            @if($service->introduction)
                                <p class="wow fadeInUp">{{ $service->introduction }}</p>
                            @endif

                            {{-- Description paragraphs --}}
                            @if(isset($content['description']['paragraphs']))
                                @foreach($content['description']['paragraphs'] as $index => $paragraph)
                                    <p class="wow fadeInUp" data-wow-delay="{{ $index * 0.1 }}s">{{ $paragraph }}</p>
                                @endforeach
                            @endif

                            {{-- Header spécial pour Laser Game --}}
                            @if(isset($content['header']))
                                <div class="service-bonds-box">
                                    @if(isset($content['header']['highlight']))
                                        <div class="badge bg-primary text-white mb-3 px-4 py-2 wow fadeInUp" style="font-size: 1rem; font-weight: 600;">
                                            {{ $content['header']['highlight']['text'] }}
                                        </div>
                                    @endif
                                    @if(isset($content['header']['main_title']))
                                        <h2 class="text-anime-style-2">{{ $content['header']['main_title'] }}</h2>
                                    @endif
                                    @if(isset($content['header']['subtitle']))
                                        <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $content['header']['subtitle'] }}</p>
                                    @endif
                                    @if(isset($content['header']['description']))
                                        <p class="wow fadeInUp" data-wow-delay="0.3s">{{ $content['header']['description'] }}</p>
                                    @endif
                                </div>
                            @endif

                            {{-- Sub Sections --}}
                            @if(isset($content['sub_sections']))
                                @foreach($content['sub_sections'] as $sectionIndex => $subSection)
                                    @php
                                        $isPension = $service->slug === 'pension';
                                        $isTarifsSection = isset($subSection['title']) && strpos($subSection['title'], 'Tarifs') !== false;
                                    @endphp

                                    @if($sectionIndex === 0)
                                        <!-- Service Bonds Box Start -->
                                        <div class="service-bonds-box">
                                            <h2 class="text-anime-style-2">{!! nl2br(e($subSection['title'])) !!}</h2>

                                            @if(isset($subSection['content']['paragraphs']))
                                                @foreach($subSection['content']['paragraphs'] as $p)
                                                    <p class="wow fadeInUp">{{ $p }}</p>
                                                @endforeach
                                            @endif

                                            {{-- Formulas as Bonds Items --}}
                                            @if(isset($subSection['content']['formulas']))
                                                <div class="service-bonds-item-list">
                                                    @foreach($subSection['content']['formulas'] as $fIndex => $formula)
                                                        <div class="service-bond-item wow fadeInUp" data-wow-delay="{{ ($fIndex + 1) * 0.2 }}s">
                                                            <div class="icon-box">
                                                                <img src="{{ asset('storage/images/icon-service-bonds-' . (($fIndex % 2) + 1) . '.svg') }}" alt="">
                                                            </div>
                                                            <div class="service-bonds-item-content">
                                                                <h3>{{ $formula['name'] }}</h3>
                                                                @if(isset($formula['content']['paragraphs']))
                                                                    @foreach($formula['content']['paragraphs'] as $p)
                                                                        <p>{{ $p }}</p>
                                                                    @endforeach
                                                                @endif
                                                                @if(isset($formula['content']['details']))
                                                                    <ul>
                                                                        @foreach($formula['content']['details'] as $detail)
                                                                            <li>{{ $detail }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif

                                            {{-- Items as list --}}
                                            @if(isset($subSection['content']['items']))
                                                <div class="service-bonds-item-list">
                                                    @foreach($subSection['content']['items'] as $iIndex => $item)
                                                        @php
                                                            // Skip items vides pour pension
                                                            $hasContent = isset($item['detail']) || isset($item['text']) || isset($item['sub_details']);
                                                            if($isPension && !$hasContent) continue;
                                                        @endphp
                                                        <div class="service-bond-item wow fadeInUp" data-wow-delay="{{ ($iIndex + 1) * 0.2 }}s">
                                                            <div class="icon-box">
                                                                <img src="{{ asset('storage/images/icon-service-bonds-' . (($iIndex % 2) + 1) . '.svg') }}" alt="">
                                                            </div>
                                                            <div class="service-bonds-item-content">
                                                                @if(isset($item['title']))
                                                                    <h3>{{ $item['title'] }}</h3>
                                                                @elseif(isset($item['name']))
                                                                    <h3>{{ $item['name'] }}</h3>
                                                                @endif
                                                                @if(isset($item['detail']))
                                                                    <p>{{ $item['detail'] }}</p>
                                                                @endif
                                                                @if(isset($item['text']))
                                                                    <p>{{ $item['text'] }}</p>
                                                                @endif
                                                                @if(isset($item['sub_details']))
                                                                    <ul>
                                                                        @foreach($item['sub_details'] as $subDetail)
                                                                            <li>{{ $subDetail }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif

                                            {{-- Emphasis --}}
                                            @if(isset($subSection['content']['emphasis']))
                                                <p class="wow fadeInUp" style="font-style: italic; font-weight: 500; margin-top: 2rem;">
                                                    <em>{{ $subSection['content']['emphasis'] }}</em>
                                                </p>
                                            @endif
                                        </div>
                                        <!-- Service Bonds Box End -->

                                    @elseif($sectionIndex === 1)
                                        <!-- Service Experience Box Start -->
                                        <div class="service-experience-box">
                                            <h2 class="text-anime-style-2">{!! nl2br(e($subSection['title'])) !!}</h2>

                                            @if(isset($subSection['content']['paragraphs']))
                                                @foreach($subSection['content']['paragraphs'] as $p)
                                                    <p class="wow fadeInUp">{{ $p }}</p>
                                                @endforeach
                                            @endif

                                            {{-- Emphasis --}}
                                            @if(isset($subSection['content']['emphasis']))
                                                <p class="wow fadeInUp" style="font-style: italic; font-weight: 500; margin-top: 2rem;">
                                                    <em>{{ $subSection['content']['emphasis'] }}</em>
                                                </p>
                                            @endif

                                            {{-- Vidéo pour École Poney après "Notre pédagogie" --}}
                                            @if($service->slug === 'lecole-poney-des-2-ans' && strpos($subSection['title'], 'pédagogie') !== false)
                                                <div class="service-video-box wow fadeInUp" data-wow-delay="0.4s" style="margin-top: 2rem;">
                                                    <div class="ratio ratio-16x9" style="border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/jI1skmgUo2Y?si=ZO7nbASJKkbY4zgG"
                                                            title="Vidéo Equidrive"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            referrerpolicy="strict-origin-when-cross-origin"
                                                            allowfullscreen
                                                            style="border: 0;">
                                                        </iframe>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="service-experience-body">
                                                <div class="service-experience-content">
                                                    @if(isset($subSection['content']['formulas']))
                                                        @foreach($subSection['content']['formulas'] as $fIndex => $formula)
                                                            <div class="service-experience-item wow fadeInUp" data-wow-delay="{{ ($fIndex + 1) * 0.2 }}s">
                                                                <div class="icon-box">
                                                                    <img src="{{ asset('storage/images/icon-service-experience-1.svg') }}" alt="">
                                                                </div>
                                                                <div class="experience-item-content">
                                                                    <h3>{{ $formula['name'] }}</h3>
                                                                    @if(isset($formula['content']['paragraphs'][0]))
                                                                        <p>{{ $formula['content']['paragraphs'][0] }}</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    @if(isset($subSection['content']['items']) && count($subSection['content']['items']) > 0)
                                                        <div class="service-experience-list wow fadeInUp" data-wow-delay="0.4s">
                                                            <ul>
                                                                @foreach($subSection['content']['items'] as $item)
                                                                    @php
                                                                        $hasContent = isset($item['detail']) || isset($item['text']) || isset($item['title']);
                                                                        if($isPension && !$hasContent) continue;
                                                                    @endphp
                                                                    @if(isset($item['detail']))
                                                                        <li>{{ $item['detail'] }}</li>
                                                                    @elseif(isset($item['text']))
                                                                        <li>{{ $item['text'] }}</li>
                                                                    @elseif(isset($item['title']))
                                                                        <li>{{ $item['title'] }}</li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="service-experience-image">
                                                    <figure class="image-anime reveal">
                                                        @php
                                                            // Utiliser l'image personnalisée si définie, sinon l'image par défaut
                                                            $experienceImage = $content['experience_image'] ?? 'images/service-experience-image.jpg';
                                                            $experienceImagePath = strpos($experienceImage, 'images/') === 0
                                                                ? 'storage/' . $experienceImage
                                                                : 'storage/' . $experienceImage;
                                                        @endphp
                                                        <img src="{{ asset($experienceImagePath) }}" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Service Experience Box End -->

                                    @else
                                        @if($isTarifsSection && $isPension)
                                            {{-- Section Tarifs et Contact pour Pension - CTA moderne --}}
                                            <div class="service-cta-box" style="margin-top: 3rem; padding: 3rem; background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-secondary) 100%); border-radius: 15px; color: white; text-align: center;">
                                                <h2 class="text-anime-style-2 wow fadeInUp" style="color: white; margin-bottom: 1.5rem;">
                                                    Intéressé par nos <span style="color: var(--bs-warning);">prestations de pension</span> ?
                                                </h2>
                                                <p class="wow fadeInUp" data-wow-delay="0.2s" style="font-size: 1.1rem; margin-bottom: 2.5rem; color: rgba(255,255,255,0.9);">
                                                    Découvrez nos tarifs compétitifs et contactez-nous pour plus d'informations
                                                </p>
                                                <div class="row justify-content-center g-3">
                                                    <div class="col-md-6 col-lg-5">
                                                        <a href="{{ route('prices') }}" class="btn btn-light btn-lg w-100 wow fadeInUp" data-wow-delay="0.3s" style="font-weight: 600; padding: 1rem 2rem; border-radius: 50px;">
                                                            <i class="fa-solid fa-tag me-2"></i> Voir les tarifs
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-5">
                                                        <a href="{{ route('contact') }}" class="btn btn-warning btn-lg w-100 wow fadeInUp" data-wow-delay="0.4s" style="font-weight: 600; padding: 1rem 2rem; border-radius: 50px;">
                                                            <i class="fa-solid fa-envelope me-2"></i> Nous contacter
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <!-- Service Facility Box Start -->
                                            <div class="service-facility-box">
                                                <h2 class="text-anime-style-2">{!! nl2br(e($subSection['title'])) !!}</h2>

                                                @if(isset($subSection['content']['paragraphs']))
                                                    @foreach($subSection['content']['paragraphs'] as $p)
                                                        <p class="wow fadeInUp">{{ $p }}</p>
                                                    @endforeach
                                                @endif

                                                @if(isset($subSection['content']['items']) || isset($subSection['content']['formulas']))
                                                    <div class="service-facility-body">
                                                        @php
                                                            $facilityItems = $subSection['content']['items'] ?? $subSection['content']['formulas'] ?? [];
                                                        @endphp

                                                        @foreach($facilityItems as $fIndex => $item)
                                                            @php
                                                                $hasContent = isset($item['detail']) || isset($item['text']) || isset($item['sub_details']) || isset($item['content']['paragraphs']);
                                                                if($isPension && !$hasContent) continue;
                                                            @endphp
                                                            <div class="service-facility-item wow fadeInUp" data-wow-delay="{{ ($fIndex + 1) * 0.2 }}s">
                                                                <div class="icon-box">
                                                                    <img src="{{ asset('storage/images/icon-service-facility-' . (($fIndex % 4) + 1) . '.svg') }}" alt="">
                                                                </div>
                                                                <div class="service-facility-content">
                                                                    @if(isset($item['name']))
                                                                        <h3>{{ $item['name'] }}</h3>
                                                                    @elseif(isset($item['title']))
                                                                        <h3>{{ $item['title'] }}</h3>
                                                                    @endif

                                                                    @if(isset($item['detail']))
                                                                        <p>{{ $item['detail'] }}</p>
                                                                    @elseif(isset($item['text']))
                                                                        <p>{{ $item['text'] }}</p>
                                                                    @elseif(isset($item['content']['paragraphs']))
                                                                        @foreach($item['content']['paragraphs'] as $p)
                                                                            <p>{{ $p }}</p>
                                                                        @endforeach
                                                                    @endif

                                                                    @if(isset($item['sub_details']))
                                                                        <ul>
                                                                            @foreach($item['sub_details'] as $subDetail)
                                                                                <li>{{ $subDetail }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Service Facility Box End -->
                                        @endif
                                    @endif
                                @endforeach
                            @endif

                            {{-- Details sections (pour Laser Game) --}}
                            @if(isset($content['details']))
                                <div class="service-experience-box">
                                    <h2 class="text-anime-style-2">Découvrez cette <span>activité unique</span></h2>

                                    <div class="service-experience-body">
                                        <div class="service-experience-content">
                                            @foreach($content['details'] as $dIndex => $detail)
                                                <div class="service-experience-item wow fadeInUp" data-wow-delay="{{ ($dIndex + 1) * 0.2 }}s">
                                                    <div class="icon-box">
                                                        <img src="{{ asset('storage/images/icon-service-experience-1.svg') }}" alt="">
                                                    </div>
                                                    <div class="experience-item-content">
                                                        <h3>{{ $detail['name'] }}</h3>
                                                        @if(isset($detail['paragraphs'][0]))
                                                            <p>{{ $detail['paragraphs'][0] }}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="service-experience-list wow fadeInUp" data-wow-delay="0.4s">
                                                <ul>
                                                    @foreach($content['details'] as $detail)
                                                        @if(isset($detail['paragraphs']) && count($detail['paragraphs']) > 1)
                                                            @for($i = 1; $i < count($detail['paragraphs']); $i++)
                                                                <li>{{ $detail['paragraphs'][$i] }}</li>
                                                            @endfor
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="service-experience-image">
                                            <figure class="image-anime reveal">
                                                <img src="{{ asset('storage/images/service-experience-image.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- CTA moderne pour Laser Game avec image --}}
                            @if(isset($content['footer']['call_to_actions']) && $service->slug === 'laser-game-randonnees')
                                <div class="service-laser-cta" style="margin-top: 3rem; position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
                                    <div style="position: relative; min-height: 500px;">
                                        {{-- Image de fond --}}
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.4) 100%), url('{{ asset('storage/laser-game/laser-game-3.jpg') }}') center/cover; z-index: 1;"></div>

                                        {{-- Contenu --}}
                                        <div style="position: relative; z-index: 2; padding: 4rem 3rem; text-align: center; color: white;">
                                            <h2 class="text-anime-style-2 wow fadeInUp" style="color: white; font-size: 2.5rem; margin-bottom: 2rem;">
                                                Prêt à devenir un <span style="color: var(--bs-warning);">cavalier intergalactique</span> ?
                                            </h2>

                                            <div class="cta-text" style="margin-bottom: 2.5rem;">
                                                @foreach($content['footer']['call_to_actions'] as $index => $cta)
                                                    @if($index === 0)
                                                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="font-size: 1.3rem; font-weight: 500; color: rgba(255,255,255,0.95); margin-bottom: 1rem;">
                                                            {{ $cta }}
                                                        </p>
                                                    @endif
                                                @endforeach
                                            </div>

                                            <a href="{{ route('contact') }}" class="btn btn-warning btn-lg wow fadeInUp" data-wow-delay="0.4s" style="font-weight: 600; padding: 1.2rem 3rem; border-radius: 50px; font-size: 1.1rem; box-shadow: 0 5px 20px rgba(255,193,7,0.4);">
                                                <i class="fa-solid fa-rocket me-2"></i> Rejoignez l'aventure !
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- CTA moderne pour Anniversaire avec image --}}
                            @if($service->slug === 'anniversaire')
                                <div class="service-anniversaire-cta" style="margin-top: 3rem; position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
                                    <div style="position: relative; min-height: 500px;">
                                        {{-- Image de fond --}}
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(229, 117, 102, 0.85) 0%, rgba(255, 182, 193, 0.75) 100%), url('{{ asset('storage/anniversaire-cheval.jpg') }}') center/cover; z-index: 1;"></div>

                                        {{-- Contenu --}}
                                        <div style="position: relative; z-index: 2; padding: 4rem 3rem; text-align: center; color: white;">
                                            <h2 class="text-anime-style-2 wow fadeInUp" style="color: white; font-size: 2.5rem; margin-bottom: 2rem;">
                                                Votre enfant est <span style="color: #FFD700;">invité à un anniversaire</span> à Equinans ?
                                            </h2>

                                            <div class="cta-text" style="margin-bottom: 2.5rem;">
                                                <p class="wow fadeInUp" data-wow-delay="0.2s" style="font-size: 1.3rem; font-weight: 500; color: rgba(255,255,255,0.95); margin-bottom: 1rem;">
                                                    Complétez le formulaire d'inscription obligatoire pour que nous puissions accueillir votre enfant en toute sécurité
                                                </p>
                                            </div>

                                            <div class="row justify-content-center g-3">
                                                <div class="col-md-6 col-lg-5">
                                                    <a href="{{ route('invitation.anniversaire') }}" class="btn btn-warning btn-lg w-100 wow fadeInUp" data-wow-delay="0.3s" style="font-weight: 600; padding: 1.2rem 2rem; border-radius: 50px; box-shadow: 0 5px 20px rgba(255,193,7,0.4);">
                                                        <i class="fa-solid fa-clipboard-list me-2"></i> Formulaire d'invitation
                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-lg-5">
                                                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg w-100 wow fadeInUp" data-wow-delay="0.4s" style="font-weight: 600; padding: 1.2rem 2rem; border-radius: 50px;">
                                                        <i class="fa-solid fa-cake-candles me-2"></i> Organiser un anniversaire
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!-- Service Entry End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->
</div>
