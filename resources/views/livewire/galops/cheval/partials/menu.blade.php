<div class="col-lg-3">
    <div class="page-single-sidebar">
        <div class="page-category-list wow fadeInUp">
            <h3>Les Galops®</h3>
            <ul>
                <li><a href="{{ route('galop.1') }}" @if(request()->routeIs('galop.1')) class="active" @endif>Galop® 1</a></li>
                <li><a href="{{ route('galop.2') }}" @if(request()->routeIs('galop.2')) class="active" @endif>Galop® 2</a></li>
                <li><a href="{{ route('galop.3') }}" @if(request()->routeIs('galop.3')) class="active" @endif>Galop® 3</a></li>
                <li><a href="{{ route('galop.4') }}" @if(request()->routeIs('galop.4')) class="active" @endif>Galop® 4</a></li>
                <li><a href="{{ route('galop.5') }}" @if(request()->routeIs('galop.5')) class="active" @endif>Galop® 5</a></li>
                <li><a href="{{ route('galop.6') }}" @if(request()->routeIs('galop.6')) class="active" @endif>Galop® 6</a></li>
                <li><a href="{{ route('galop.7') }}" @if(request()->routeIs('galop.7')) class="active" @endif>Galop® 7</a></li>
            </ul>
        </div>

        @php
            // Déterminer le PDF du galop selon la route actuelle
            $routeName = request()->route()->getName();
            $galopNumber = str_replace('galop.', '', $routeName);
            $pdfUrl = asset('storage/galop-memo/cheval/galop-' . $galopNumber . '.pdf');
            $galopTitle = 'Galop® ' . $galopNumber;
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
