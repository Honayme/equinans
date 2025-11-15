<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- SEO dynamique via romanzipp/laravel-seo --}}
    {!! seo()->render() !!}

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Google Fonts: Mona Sans & Playfair Display -->
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
@yield('body')

@stack('modals')
@livewireScripts
@stack('scripts')
</body>
</html>
