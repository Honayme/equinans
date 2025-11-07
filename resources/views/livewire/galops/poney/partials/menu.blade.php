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
        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
            <div class="sidebar-info-box">
                <div class="icon-box mb-3">
                    {!! $icone !!}
                </div>
                <h4 class="mb-3">{{ $titre }}</h4>
                <p>{{ $description }}</p>
            </div>
        </div>
    </div>
</div>
