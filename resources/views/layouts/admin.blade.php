<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') — HIMSI DPC Cikarang</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logos/himsi.webp') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-50/80 text-neutral-900 font-sans antialiased" data-is-admin="true" x-data="{ sidebarOpen: false }">

    {{-- ── Mobile Overlay ── --}}
    <div class="fixed inset-0 bg-neutral-900/40 backdrop-blur-sm z-40 lg:hidden"
         x-show="sidebarOpen"
         x-transition.opacity.duration.300ms
         x-cloak
         @click="sidebarOpen = false">
    </div>

    {{-- ── Sidebar (Light Premium Design) ── --}}
    <aside class="fixed inset-y-0 left-0 w-72 bg-white border-r border-neutral-200 z-50 flex flex-col transition-transform duration-300 lg:translate-x-0 shadow-xl shadow-neutral-200/50 lg:shadow-none"
           :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">

        {{-- Logo Area --}}
        <div class="h-16 flex items-center px-6 shrink-0 border-b border-neutral-100">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                <img src="{{ asset('assets/images/logos/himsi.webp') }}" class="w-8 h-auto" alt="HIMSI Logo">
                <div class="flex flex-col">
                    <span class="font-heading font-black text-primary-600 text-base leading-none tracking-wide">HIMSI</span>
                    <span class="font-sans text-neutral-500 text-[10px] leading-tight mt-0.5 uppercase tracking-widest">Admin Panel</span>
                </div>
            </a>
            <button @click="sidebarOpen = false" class="ml-auto lg:hidden text-neutral-500 hover:text-neutral-900">
                <i class="ph-bold ph-x text-xl"></i>
            </button>
        </div>

        {{-- Quick Create Button --}}
        <div class="p-4 shrink-0" x-data="{ openNew: false }">
            <div class="relative">
                <button @click="openNew = !openNew" @click.away="openNew = false" 
                        class="w-full flex items-center justify-between gap-2 bg-primary-600 hover:bg-primary-700 text-white px-4 py-2.5 rounded-xl font-semibold text-sm transition-colors shadow-md shadow-primary-200">
                    <div class="flex items-center gap-2">
                        <i class="ph-bold ph-plus"></i>
                        <span>Buat Baru</span>
                    </div>
                    <i class="ph-bold ph-caret-down text-xs transition-transform" :class="openNew ? 'rotate-180' : ''"></i>
                </button>

                {{-- Dropdown Menu --}}
                <div x-show="openNew" 
                     x-transition.opacity.duration.200ms
                     x-cloak
                     class="absolute top-full left-0 w-full mt-2 bg-white border border-neutral-200 rounded-xl shadow-xl overflow-hidden z-50 py-1">
                    <a href="{{ route('admin.kegiatan.create') }}" class="flex items-center gap-3 px-4 py-2.5 hover:bg-neutral-50 text-neutral-700 hover:text-primary-600 transition-colors text-sm font-medium">
                        <i class="ph-bold ph-calendar-plus text-primary-500"></i>
                        Kegiatan Acara
                    </a>
                    <a href="{{ route('admin.proker.create') }}" class="flex items-center gap-3 px-4 py-2.5 hover:bg-neutral-50 text-neutral-700 hover:text-info transition-colors text-sm font-medium">
                        <i class="ph-bold ph-clipboard-text text-info"></i>
                        Program Kerja
                    </a>
                    <a href="{{ route('admin.anggota.create') }}" class="flex items-center gap-3 px-4 py-2.5 hover:bg-neutral-50 text-neutral-700 hover:text-accent-500 transition-colors text-sm font-medium">
                        <i class="ph-bold ph-user-plus text-accent-500"></i>
                        Anggota & BPH
                    </a>
                </div>
            </div>
        </div>

        {{-- Navigation Menu --}}
        <nav class="flex-1 overflow-y-auto px-3 py-2 scrollbar-thin scrollbar-thumb-neutral-200 scrollbar-track-transparent">
            
            {{-- Dashboard --}}
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 mb-6 group {{ request()->routeIs('admin.dashboard') ? 'bg-primary-50 text-primary-700' : 'text-neutral-600 hover:bg-neutral-100 hover:text-neutral-900' }}">
                <i class="ph-bold ph-squares-four text-lg {{ request()->routeIs('admin.dashboard') ? 'text-primary-600' : 'text-neutral-500 group-hover:text-neutral-700' }}"></i>
                <span>Dashboard Utama</span>
            </a>

            {{-- CMS Section --}}
            <div class="mb-6">
                <p class="text-[10px] font-bold tracking-[0.2em] uppercase text-neutral-400 px-3 mb-3">Manajemen Konten</p>
                
                {{-- Kegiatan Item --}}
                <div class="mb-1">
                    <a href="{{ route('admin.kegiatan.index') }}" 
                       class="flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.kegiatan.*') ? 'bg-primary-50 text-primary-700' : 'text-neutral-600 hover:bg-neutral-100 hover:text-neutral-900' }}">
                        <div class="flex items-center gap-3">
                            <i class="ph-bold ph-calendar-check text-lg {{ request()->routeIs('admin.kegiatan.*') ? 'text-primary-600' : 'text-neutral-500 group-hover:text-neutral-700' }}"></i>
                            <span>Kegiatan</span>
                        </div>
                        @if(request()->routeIs('admin.kegiatan.*'))
                        <div class="w-1.5 h-1.5 rounded-full bg-primary-600"></div>
                        @endif
                    </a>
                </div>

                {{-- Proker Item --}}
                <div class="mb-1">
                    <a href="{{ route('admin.proker.index') }}" 
                       class="flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.proker.*') ? 'bg-primary-50 text-primary-700' : 'text-neutral-600 hover:bg-neutral-100 hover:text-neutral-900' }}">
                        <div class="flex items-center gap-3">
                            <i class="ph-bold ph-clipboard-text text-lg {{ request()->routeIs('admin.proker.*') ? 'text-primary-600' : 'text-neutral-500 group-hover:text-neutral-700' }}"></i>
                            <span>Program Kerja</span>
                        </div>
                        @if(request()->routeIs('admin.proker.*'))
                        <div class="w-1.5 h-1.5 rounded-full bg-primary-600"></div>
                        @endif
                    </a>
                </div>
            </div>

            {{-- SDM Section --}}
            <div class="mb-6">
                <p class="text-[10px] font-bold tracking-[0.2em] uppercase text-neutral-400 px-3 mb-3">Sumber Daya</p>
                
                {{-- Anggota Item --}}
                <div class="mb-1">
                    <a href="{{ route('admin.anggota.index') }}" 
                       class="flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.anggota.*') ? 'bg-primary-50 text-primary-700' : 'text-neutral-600 hover:bg-neutral-100 hover:text-neutral-900' }}">
                        <div class="flex items-center gap-3">
                            <i class="ph-bold ph-users text-lg {{ request()->routeIs('admin.anggota.*') ? 'text-primary-600' : 'text-neutral-500 group-hover:text-neutral-700' }}"></i>
                            <span>Anggota & BPH</span>
                        </div>
                        @if(request()->routeIs('admin.anggota.*'))
                        <div class="w-1.5 h-1.5 rounded-full bg-primary-600"></div>
                        @endif
                    </a>
                </div>
            </div>

        </nav>

        {{-- Footer Profile --}}
        <div class="p-4 border-t border-neutral-100 shrink-0 bg-neutral-50/50">
            <div class="flex items-center justify-between px-2 py-2">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-primary-100 flex items-center justify-center text-primary-600">
                        <i class="ph-fill ph-user"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-bold text-neutral-900 leading-tight">Admin</span>
                        <span class="text-[10px] font-medium text-neutral-500">Superadmin</span>
                    </div>
                </div>
                <a href="{{ route('login') }}" class="w-8 h-8 flex items-center justify-center rounded-lg text-neutral-400 hover:text-danger hover:bg-danger-light transition-colors" title="Keluar">
                    <i class="ph-bold ph-sign-out text-lg"></i>
                </a>
            </div>
        </div>
    </aside>

    {{-- ── Main Wrapper ── --}}
    <div class="lg:ml-72 min-h-screen flex flex-col relative z-10">

        {{-- Topbar --}}
        <header class="sticky top-0 z-30 h-16 bg-white/90 backdrop-blur-md border-b border-neutral-200 flex items-center justify-between px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-4">
                <button @click="sidebarOpen = true" class="lg:hidden p-2 -ml-2 rounded-lg text-neutral-500 hover:bg-neutral-100 transition-colors">
                    <i class="ph-bold ph-list text-xl"></i>
                </button>

                <div class="hidden sm:block">
                    <h1 class="font-heading font-bold text-neutral-900 text-lg">@yield('page_title', 'Dashboard')</h1>
                    <p class="text-neutral-500 text-xs font-medium">@yield('page_subtitle', 'Sistem Informasi Manajemen HIMSI')</p>
                </div>
            </div>

            <div class="flex items-center gap-3 sm:gap-5">
                {{-- Global Search (Fake) --}}
                <div class="relative hidden md:block w-64">
                    <i class="ph-bold ph-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-neutral-400"></i>
                    <input type="search" placeholder="Pencarian cepat (Ctrl+K)" 
                           class="w-full pl-9 pr-4 py-2 bg-neutral-100 border-transparent rounded-xl text-sm focus:bg-white focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                </div>

                <div class="h-6 w-px bg-neutral-200 hidden sm:block"></div>

                <a href="/" target="_blank" class="w-9 h-9 flex items-center justify-center rounded-xl text-neutral-500 hover:text-primary-600 hover:bg-primary-50 transition-colors" title="Lihat Website">
                    <i class="ph-bold ph-browser text-xl"></i>
                </a>
                <button class="w-9 h-9 flex items-center justify-center rounded-xl text-neutral-500 hover:text-primary-600 hover:bg-primary-50 transition-colors relative" title="Notifikasi">
                    <i class="ph-bold ph-bell text-xl"></i>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-danger rounded-full border border-white"></span>
                </button>
            </div>
        </header>

        {{-- Page Content --}}
        <main class="flex-1 p-4 sm:p-6 lg:p-8">
            <div class="sm:hidden mb-6">
                <h1 class="font-heading font-bold text-neutral-900 text-xl">@yield('page_title', 'Dashboard')</h1>
                <p class="text-neutral-500 text-sm">@yield('page_subtitle', 'Sistem Informasi Manajemen HIMSI')</p>
            </div>

            @yield('admin_content')
            
        </main>
        
        {{-- Footer --}}
        <footer class="mt-auto pt-6 border-t border-neutral-200 pb-6 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-medium text-neutral-400">
                <p>© {{ date('Y') }} HIMSI DPC Cikarang.</p>
                <div class="flex items-center gap-4">
                    <a href="#" class="hover:text-primary-600">Bantuan</a>
                    <a href="#" class="hover:text-primary-600">Versi 1.0.0</a>
                </div>
            </div>
        </footer>

    </div>

</body>
</html>
