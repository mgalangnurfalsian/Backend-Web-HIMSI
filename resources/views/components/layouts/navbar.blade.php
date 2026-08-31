{{--
    Navbar — HIMSI DPC Cikarang
    Menggunakan Alpine.js untuk mobile menu toggle
    GSAP hook: .js-navbar (untuk scroll-based style change)
--}}
<header class="js-navbar fixed top-0 left-0 right-0 z-50 transition-all duration-300"
        x-data="{ mobileOpen: false, scrolled: false }"
        @scroll.window="scrolled = window.scrollY > 20"
        :class="scrolled ? 'bg-white/90 backdrop-blur-md border-b border-neutral-200 shadow-sm' : 'bg-transparent'">

    <nav class="section-container h-[70px] flex items-center justify-between">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-3 group" aria-label="HIMSI DPC Cikarang">
                <img src="{{ asset('assets/images/logos/himsi.webp') }}" class="w-10 h-auto" alt="himsi logo">
                <div class="h-8 w-px bg-neutral-300"></div>
                <div class="flex flex-col">
                    <span class="font-heading font-black text-primary-500 text-lg leading-none tracking-wide">HIMSI</span>
                    <span class="font-sans font-medium text-neutral-500 text-[10px] leading-tight">UBSI CIKARANG</span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <ul class="hidden md:flex items-center gap-8" role="list">
                <li><a href="/sejarah" class="text-neutral-700 hover:text-primary-500 transition-colors duration-200 font-medium text-base">Sejarah</a></li>
                <li><a href="/bph" class="text-neutral-700 hover:text-primary-500 transition-colors duration-200 font-medium text-base">BPH</a></li>
                <li><a href="/divisi" class="text-neutral-700 hover:text-primary-500 transition-colors duration-200 font-medium text-base">Divisi</a></li>
                <li><a href="/kegiatan" class="text-neutral-700 hover:text-primary-500 transition-colors duration-200 font-medium text-base">Kegiatan</a></li>
            </ul>

            {{-- CTA Button (Hidden) --}}
            <div class="hidden">
                <x-ui.button variant="primary" size="sm" href="/login">
                    Masuk
                </x-ui.button>
            </div>

            {{-- Mobile Hamburger --}}
            <button class="md:hidden p-2 rounded-lg text-neutral-600 hover:bg-neutral-100 transition-colors"
                    @click="mobileOpen = !mobileOpen"
                    :aria-expanded="mobileOpen"
                    aria-label="Buka menu navigasi">
                <i class="ph-fill ph-list text-2xl" x-show="!mobileOpen"></i>
                <i class="ph-fill ph-x text-2xl" x-show="mobileOpen" x-cloak></i>
            </button>

        {{-- Mobile Menu --}}
        <div x-show="mobileOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             x-cloak
             class="md:hidden mt-4 pb-4 border-t border-neutral-200 bg-white shadow-lg rounded-b-2xl absolute left-0 right-0 px-4">
            <ul class="flex flex-col gap-1 mt-4" role="list">
                <li><a href="/sejarah" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 hover:text-primary-500 transition-colors text-sm font-medium">Sejarah</a></li>
                <li><a href="/bph" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 hover:text-primary-500 transition-colors text-sm font-medium">BPH</a></li>
                <li><a href="/divisi" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 hover:text-primary-500 transition-colors text-sm font-medium">Divisi</a></li>
                <li><a href="/kegiatan" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 hover:text-primary-500 transition-colors text-sm font-medium">Kegiatan</a></li>
                <li class="pt-2 hidden">
                    <x-ui.button variant="primary" size="sm" href="/login" class="w-full justify-center">
                        Masuk
                    </x-ui.button>
                </li>
            </ul>
        </div>
    </nav>
</header>
