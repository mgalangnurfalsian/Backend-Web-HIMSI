{{--
    Error Page — Standalone Layout
    resources/views/errors/layout.blade.php
    ============================================================
    Layout mandiri untuk halaman error. TIDAK extends dari layouts.app.
    Tidak ada navbar, tidak ada footer.

    Sections yang di-yield dari child views:
      @section('code')    — kode error: 404, 500, dll.
      @section('title')   — judul singkat
      @section('message') — deskripsi
      @section('icon')    — nama icon phosphor (misal: compass, warning-circle)
      @section('badge')   — label badge kecil (misal: Halaman Tidak Ditemukan)
--}}
<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('code', 'Error') — HIMSI DPC Cikarang</title>
    <meta name="description" content="@yield('title', 'Terjadi kesalahan') — HIMSI DPC Cikarang">
    <link rel="shortcut icon" href="{{ asset('assets/images/logos/himsi.webp') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full antialiased overflow-hidden">

{{-- Split-screen layout: flex row on desktop, stack on mobile --}}
<div class="flex flex-col md:flex-row h-full min-h-screen">

    {{-- ──────────────────────────────────────────
         LEFT PANEL — Dark, branded, bold number
         ────────────────────────────────────────── --}}
    <div class="error-left-panel js-error-left">

        {{-- HIMSI wordmark at top-left --}}
        <div class="relative z-10 mb-auto pb-12">
            <a href="/" class="flex items-center gap-3 group">
                <img src="{{ asset('assets/images/logos/himsi.webp') }}"
                     alt="Logo HIMSI"
                     class="h-10 w-auto opacity-80 group-hover:opacity-100 transition-opacity"
                     onerror="this.style.display='none'">
                <div>
                    <p class="text-white font-heading font-black text-lg leading-none tracking-tight">HIMSI</p>
                    <p class="text-primary-400 font-bold text-xs tracking-widest uppercase leading-none mt-0.5">DPC Cikarang</p>
                </div>
            </a>
        </div>

        {{-- The BIG accent-colored error code --}}
        <div class="relative z-10">
            <div class="error-accent-label js-error-left-code heading-display">
                @yield('code', '404')
            </div>
            <div class="mt-3 w-12 h-1 bg-accent-500 rounded-full"></div>
            <p class="text-primary-300 font-semibold text-sm tracking-widest uppercase mt-4 font-mono">
                @yield('error-desc')
            </p>
        </div>

        {{-- Decorative ghost number in the background --}}
        <div class="error-big-code heading-display" aria-hidden="true">
            @yield('code', '404')
        </div>

        {{-- Bottom-left: version / timestamp --}}
        <div class="relative z-10 mt-auto pt-12">
            <p class="text-primary-700 text-xs font-mono tracking-widest">
                HIMSI &copy; {{ date('Y') }}
            </p>
        </div>
    </div>

    {{-- Vertical gradient divider --}}
    <div class="error-divider js-error-divider"></div>

    {{-- ──────────────────────────────────────────
         RIGHT PANEL — Clean, informative content
         ────────────────────────────────────────── --}}
    <div class="error-right-panel">

        {{-- Decorative rings (pure CSS, no inline style) --}}
        <div class="error-deco-ring js-error-right-item"
             style="width:400px;height:400px;top:-100px;right:-150px;opacity:0.6;"></div>
        <div class="error-deco-ring js-error-right-item"
             style="width:240px;height:240px;top:-20px;right:-60px;opacity:0.4;"></div>

        {{-- Content wrapper --}}
        <div class="relative z-10 max-w-2xl">

            {{-- Title --}}
            <h1 class="font-heading font-extrabold text-neutral-900 mb-4 tracking-tight leading-tight heading-display js-error-right-item"
                style="font-size: 3rem;">
                @yield('title', 'Terjadi Kesalahan')
            </h1>

            {{-- Divider line --}}
            <div class="w-16 h-1 bg-accent-400 rounded-full mb-6 js-error-right-item"></div>

            {{-- Description --}}
            <p class="text-neutral-600 text-base leading-relaxed mb-10 js-error-right-item">
                @yield('message', 'Halaman yang Anda cari tidak tersedia.')
            </p>

            {{-- CTA --}}
            <a href="/" class="error-cta-btn js-error-right-item">
                <i class="ph-fill ph-house-simple text-base"></i>
                Kembali ke Beranda
            </a>

            @hasSection('secondary_action')
                <div class="mt-4 js-error-right-item">@yield('secondary_action')</div>
            @endif

        </div>

    </div>

</div>

</body>
</html>
