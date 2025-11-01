@extends('layouts.base')

@section('body')

    {{-- PARTIALS PERSISTANTS --}}
    {{-- Ces composants ne seront rendus qu'une seule fois et ne changeront pas lors de la navigation SPA. --}}
    {{-- Le nom ('menu', 'mobile-menu') doit être unique pour chaque bloc @persist. --}}

    @persist('menu')
     <livewire:partials.topbar />
    @endpersist

    @persist('menu')
     <livewire:partials.menu />
    @endpersist

    <main id="page"
          x-data="pageFx()"
          x-ref="page"
          x-init="init()"
          x-on:livewire:navigate.window="markNav()"
          x-show="shown"
          x-transition:enter.duration.400ms
          class="opacity-100">
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    @persist('footer')
     <livewire:partials.footer />
    @endpersist

    <script>
        function pageFx() {
            return {
                shown: true,

                // Appelé au montage de CHAQUE page (après un swap Livewire)
                init() {
                    // Si on arrive via une navigation Livewire, on déclenche seulement un fade-in
                    if (window.__lwNav === true) {
                        this.shown = false;                // état initial (invisible)
                        this.$nextTick(() => { this.shown = true }) // déclenche le x-transition.opacity
                    } else {
                        // Chargement initial (hard load): pas d'animation
                        this.shown = true;
                    }
                },

                // Marqueur global persistant entre pages (car window est conservé)
                markNav() { window.__lwNav = true },
            }
        }

        // Initialiser Alpine sur les composants persistés après le chargement
        document.addEventListener('livewire:init', () => {
            // Alpine est fourni par Livewire 3, il est automatiquement disponible
            // Pas besoin de Alpine.start(), Livewire le gère
        });
    </script>
@endsection
