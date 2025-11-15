<div class="col-lg-3">
    <div class="page-single-sidebar">
        <div class="page-category-list wow fadeInUp">
            <h3>Galops Poney</h3>
            <ul>
                <li><a href="{{ route('galops.poney.galop-bronze') }}" @if(request()->routeIs('galops.poney.galop-bronze')) class="active" @endif>Galop Bronze</a></li>
                <li><a href="{{ route('galops.poney.galop-argent') }}" @if(request()->routeIs('galops.poney.galop-argent')) class="active" @endif>Galop Argent</a></li>
                <li><a href="{{ route('galops.poney.galop-or') }}" @if(request()->routeIs('galops.poney.galop-or')) class="active" @endif>Galop Or</a></li>
                <li><a href="{{ route('galops.poney.poney-bronze') }}" @if(request()->routeIs('galops.poney.poney-bronze')) class="active" @endif>Poney Bronze</a></li>
                <li><a href="{{ route('galops.poney.poney-argent') }}" @if(request()->routeIs('galops.poney.poney-argent')) class="active" @endif>Poney Argent</a></li>
                <li><a href="{{ route('galops.poney.poney-or') }}" @if(request()->routeIs('galops.poney.poney-or')) class="active" @endif>Poney Or</a></li>
            </ul>
        </div>

        @php
            // Déterminer le PDF du galop selon la route actuelle
            $routeName = request()->route()->getName();
            $galopSlug = str_replace('galops.poney.', '', $routeName);
            $pdfUrl = asset('storage/galop-memo/poney/' . $galopSlug . '.pdf');

            // Formater le titre
            $titleParts = explode('-', $galopSlug);
            $galopType = ucfirst($titleParts[0]); // "Galop" ou "Poney"
            $galopLevel = ucfirst($titleParts[1]); // "Bronze", "Argent", "Or"
            $galopTitle = $galopType . ' ' . $galopLevel;
        @endphp

        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
            <div class="sidebar-info-box">
                <div class="icon-box mb-3">
                    <i class="fa-solid fa-file-pdf" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                </div>
                <h4 class="mb-3">Mémo {{ $galopTitle }}</h4>
                <p class="mb-3">Consultez le mémo récapitulatif de ce galop</p>
                @livewire('pdf-viewer', [
                    'pdfUrl' => $pdfUrl,
                    'titre' => 'Mémo ' . $galopTitle,
                    'buttonText' => 'Voir le mémo',
                    'buttonClass' => 'btn btn-primary w-100'
                ])
            </div>
        </div>
    </div>
</div>
