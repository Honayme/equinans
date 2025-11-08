@extends('layouts.base')

@section('body')
    {{-- PARTIALS PERSISTANTS --}}
    @persist('menu')
        <livewire:partials.topbar />
    @endpersist

    @persist('menu')
        <livewire:partials.menu />
    @endpersist

    <main id="page" class="opacity-100">
        <!-- Page Header Start -->
        <div class="page-header bg-section parallaxie">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Accès refusé</h1>
                            <nav class="wow fadeInUp">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Erreur 403</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Error Page Start -->
        <div class="error-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="error-page-image wow fadeInUp">
                            <img src="{{ asset('images/403-error-img.png') }}" alt="Erreur 403" onerror="this.style.display='none'">
                        </div>
                        <div class="error-page-content">
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Oops ! Accès <span>refusé</span></h2>
                            </div>
                            <div class="error-page-content-body">
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Vous n'avez pas la permission d'accéder à cette page. Retournez à l'accueil ou explorez d'autres sections du site.</p>
                                <a class="btn-default wow fadeInUp" data-wow-delay="0.4s" href="{{ route('home') }}">Retour à l'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Error Page End -->
    </main>

    @persist('footer')
        <livewire:partials.footer />
    @endpersist

    <script>
        function pageFx() {
            return {
                shown: true,
                init() {
                    this.shown = true;
                },
                markNav() {
                    window.__lwNav = true;
                }
            }
        }
    </script>
@endsection
