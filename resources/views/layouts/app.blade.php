<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Website resmi Himpunan Mahasiswa Sistem Informasi (HIMSI) DPC Cikarang')">
    <title>@yield('title', 'HIMSI DPC Cikarang')</title>
    
    {{-- SEO Meta Tags --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'HIMSI DPC Cikarang')">
    <meta property="og:description" content="@yield('meta_description', 'Website resmi Himpunan Mahasiswa Sistem Informasi (HIMSI) DPC Cikarang')">
    <meta property="og:image" content="{{ asset('assets/images/logos/himsi.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="shortcut icon" href="{{ asset('assets/images/logos/himsi.webp') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-50 text-neutral-900 font-sans antialiased">

    {{-- Global Loading Screen --}}
    @include('components.ui.loading')

    {{-- Skip to Content Link (Accessibility) --}}
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:z-[100] focus:px-4 focus:py-2 focus:bg-primary-600 focus:text-white focus:font-bold focus:rounded-b-lg">Lewati ke konten utama</a>

    @include('components.layouts.navbar')

    <main id="main-content">
        @yield('content')
    </main>

    @include('components.layouts.footer')

</body>
</html>
