<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- SEO dynamique via romanzipp/laravel-seo --}}
    {!! seo()->render() !!}

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


<body>
@yield('body')


@livewireScripts
@stack('scripts')
</body>
</html>
