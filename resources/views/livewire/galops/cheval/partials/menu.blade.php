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
{{--        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">--}}
{{--            <div class="sidebar-info-box">--}}
{{--                <div class="icon-box mb-3">--}}
{{--                    {!! $icone !!}--}}
{{--                </div>--}}
{{--                <h4 class="mb-3">{{ $titre }}</h4>--}}
{{--                <p>{{ $description }}</p>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
