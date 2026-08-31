@extends('layouts.app')

@section('title', 'HIMSI DPC Cikarang — Himpunan Mahasiswa Sistem Informasi')
@section('meta_description', 'Website resmi Himpunan Mahasiswa Sistem Informasi DPC Cikarang. Bergabunglah bersama kami dalam membangun generasi teknologi yang kompeten dan berdaya saing.')
@section('og_title', 'Beranda — HIMSI DPC Cikarang')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="js-hero-section relative min-h-screen overflow-hidden bg-neutral-50 flex items-center pt-20">
    <div class="section-container relative z-10 py-24 lg:py-36 text-center mx-auto flex flex-col items-center">
        
        {{-- Badge --}}
        <x-ui.badge variant="primary" size="md" dot class="mb-8 border-primary-200 bg-primary-50 text-primary-700 shadow-sm backdrop-blur-md">
            Himsi DPC Cikarang
        </x-ui.badge>
        
        {{-- Headline --}}
        <h1 class="js-hero-title font-heading font-bold text-neutral-900 text-balance mb-12 text-5xl md:text-6xl lg:text-7xl leading-[1.1] uppercase tracking-tight">
            One Organization, <span class="text-accent-500">One Family,</span><br>
            One Goal, <span class="text-accent-500">Gold.</span>
        </h1>

        {{-- CTAs --}}
        <div class="js-hero-cta flex flex-wrap items-center justify-center gap-4">
            <x-ui.button variant="primary" size="xl" href="/sejarah" class="bg-primary-500! hover:bg-primary-600! text-white! font-bold shadow-glow">
                Sejarah Himsi Cikarang
            </x-ui.button>
            <x-ui.button variant="outline" size="xl" href="#divisi" class="border-neutral-300! text-neutral-700! hover:bg-neutral-100!">
                Divisi
            </x-ui.button>
        </div>

    </div>
</section>


{{-- ============================================================
     OVERVIEW HIMSI SECTION
     ============================================================ --}}
<section class="section-padding bg-white relative">
    <div class="section-container">
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            {{-- Left Column: Logo --}}
            <div class="flex justify-center lg:justify-end">
                <div class="relative w-full max-w-sm">
                    <img src="{{ asset('assets/images/logos/himsi.webp') }}" alt="Logo resmi HIMSI DPC Cikarang - Himpunan Mahasiswa Sistem Informasi" width="400" height="400" class="relative z-10 w-full h-auto object-contain drop-shadow-xl hover:scale-105 transition-transform duration-700 ease-out">
                </div>
            </div>

            {{-- Right Column: Content --}}
            <div>
                <h2 class="js-features-title font-heading font-bold text-neutral-900 text-4xl lg:text-5xl mb-8">Apa itu HIMSI?</h2>
                <div class="js-features-desc text-neutral-600 leading-relaxed text-lg space-y-6">
                    <p>
                        Himpunan Mahasiswa Sistem Informasi (HIMSI) DPC Cikarang adalah organisasi kemahasiswaan yang berfokus pada pengembangan potensi akademik maupun non-akademik mahasiswa program studi Sistem Informasi di Universitas BSI Kampus Cikarang.
                    </p>
                    <p>
                        Kami berkomitmen untuk menjadi wadah kolaborasi, inovasi, dan peningkatan kualitas sumber daya manusia di bidang teknologi informasi. Melalui berbagai program kerja dan kegiatan interaktif, HIMSI berupaya mencetak generasi muda yang kritis, kompeten, dan memiliki daya saing global.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     STATISTICS / KEAANGGOTAAN SECTION
     ============================================================ --}}
<section class="js-stat-section py-20 md:py-28 bg-white border-t border-neutral-200 overflow-hidden relative">
    <div class="section-container">
        
        {{-- Header Split Layout --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16 max-w-7xl mx-auto">
            <div class="md:w-1/2">
                <span class="text-primary-600 font-bold tracking-widest uppercase text-xs mb-3 block">Dampak & Jangkauan</span>
                <h2 class="font-heading font-extrabold text-4xl md:text-5xl text-neutral-900 leading-tight tracking-tight">Kekuatan Ekosistem HIMSI</h2>
            </div>
        </div>

        {{-- Content Layout (Image + Cards) --}}
        <div class="relative w-full lg:h-[600px] mt-12 lg:mt-20">
            {{-- Background split color for cards --}}
            <div class="hidden lg:block absolute right-0 top-0 w-[55%] h-full bg-white -z-10"></div>
            
            {{-- Large Image (Left - Absolute for full bleed) --}}
            <div class="hidden lg:block absolute left-0 top-0 w-[50%] h-full z-10">
                <img src="{{ asset('assets/images/models.webp') }}" loading="lazy" width="800" height="600" class="w-full h-full object-cover" alt="Kegiatan Ekosistem HIMSI">
            </div>
            
            <div class="flex flex-col lg:flex-row items-stretch lg:items-center h-full max-w-7xl mx-auto relative z-40">
                
                {{-- Mobile Image (Hidden on Desktop) --}}
                <div class="w-full px-6 mb-8 h-[350px] shrink-0 relative z-10 lg:hidden">
                    <img src="{{ asset('assets/images/models.webp') }}" loading="lazy" width="600" height="400" class="w-full h-full object-cover rounded-2xl shadow-xl" alt="Kegiatan Ekosistem HIMSI">
                </div>

                {{-- Spacer for desktop --}}
                <div class="hidden lg:block w-5/12 shrink-0 h-full"></div>

                {{-- Cards Wrapper (Right) --}}
                <div class="swiper js-stat-swiper w-full lg:w-7/12 relative lg:-ml-24 h-auto lg:h-full py-12 px-6 lg:pl-16 lg:pr-0 flex items-center">
                    <div class="swiper-wrapper items-center">
                    
                    {{-- Card 1: Blue (Tahun Berdiri) --}}
                    <div class="swiper-slide aspect-[4/5] !w-[85%] md:!w-[60%] lg:!w-auto lg:!h-[70%] bg-primary-800 text-white p-8 md:p-10 rounded-2xl flex flex-col relative overflow-hidden">
                        {{-- Decorative Glow --}}
                        <div class="absolute -top-24 -right-24 w-48 h-48 bg-primary-600 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
                        
                        <div class="relative z-10 flex-1">
                            <h3 class="font-heading font-bold text-2xl md:text-3xl mb-4">Tahun Berdiri</h3>
                            <div class="w-12 h-1 bg-white mb-8"></div>
                        </div>

                        <div class="relative z-10 flex items-end justify-between mt-auto">
                            <h4 class="font-heading font-black text-5xl md:text-6xl tracking-tighter">
                                <span class="js-stat-counter" data-target="2011" data-suffix="" data-separator="">0</span>
                            </h4>
                        </div>
                    </div>

                    {{-- Card 2: White (Anggota Aktif) --}}
                    <div class="swiper-slide aspect-[4/5] !w-[85%] md:!w-[60%] lg:!w-auto lg:!h-[70%] bg-white text-neutral-900 p-8 md:p-10 rounded-2xl border border-neutral-100 flex flex-col relative">
                        <div class="relative z-10 flex-1">
                            <h3 class="font-heading font-bold text-2xl md:text-3xl mb-4">Anggota Aktif</h3>
                            <div class="w-12 h-1 bg-accent-500 mb-8"></div>
                        </div>

                        <div class="relative z-10 flex items-end justify-between mt-auto">
                            <h4 class="font-heading font-black text-5xl md:text-6xl tracking-tighter">
                                <span class="js-stat-counter" data-target="20" data-suffix="+">0</span>
                            </h4>
                        </div>
                    </div>

                    {{-- Card 3: White (Program Kerja) --}}
                    <div class="swiper-slide aspect-[4/5] !w-[85%] md:!w-[60%] lg:!w-auto lg:!h-[70%] bg-white text-neutral-900 p-8 md:p-10 rounded-2xl border border-neutral-100 flex flex-col relative">
                        <div class="relative z-10 flex-1">
                            <h3 class="font-heading font-bold text-2xl md:text-3xl mb-4">Program Kerja</h3>
                            <div class="w-12 h-1 bg-red-500 mb-8"></div>
                        </div>

                        <div class="relative z-10 flex items-end justify-between mt-auto">
                            <h4 class="font-heading font-black text-5xl md:text-6xl tracking-tighter">
                                <span class="js-stat-counter" data-target="12" data-suffix="+">0</span>
                            </h4>
                        </div>
                    </div>

                    </div> <!-- End swiper-wrapper -->
                    
                    {{-- Right Edge Fog/Gradient Mask --}}
                    <div class="hidden lg:block absolute right-0 top-0 bottom-0 w-32 md:w-48 bg-gradient-to-l from-white to-white/0 z-50 pointer-events-none"></div>
                </div> <!-- End swiper -->
            </div>
        </div>

    </div>
</section>




{{-- ============================================================
     DIVISI SECTION (HORIZONTAL SCROLL)
     ============================================================ --}}
<section id="divisi" class="js-horizontal-scroll-section relative overflow-hidden bg-primary-50 text-neutral-900 h-screen">
    
    {{-- Wrapper that will slide horizontally --}}
    <div class="js-horizontal-wrapper flex h-full w-[500vw]">
        
        {{-- Panel 0: Intro (100vw) --}}
        <div class="js-horizontal-panel w-screen h-screen relative flex items-center justify-center group px-4">
            
            {{-- Background Image --}}
            <div class="absolute inset-0 overflow-hidden bg-neutral-900">
                <img src="{{ asset('assets/images/kepengurusan_himsi.webp') }}" loading="lazy" alt="Struktur Organisasi HIMSI" class="w-full h-full object-cover">
                {{-- Dark Overlay & Vignette Effect --}}
                <div class="absolute inset-0 bg-neutral-900/60 pointer-events-none"></div>
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_transparent_20%,_rgba(0,0,0,0.8)_100%)] pointer-events-none transition-colors duration-1000"></div>
            </div>

            <div class="relative z-10 text-center max-w-3xl mx-auto transform transition-transform duration-500 hover:-translate-y-2">
                <h2 class="js-features-title font-heading font-bold text-white mb-6 text-5xl lg:text-7xl">Divisi HIMSI</h2>
                <p class="js-features-desc text-neutral-200 text-xl leading-relaxed">
                    Mengenal lebih dekat pilar-pilar penggerak roda organisasi HIMSI DPC Cikarang.
                </p>
            </div>
        </div>

        @php
        $divisions = [
            [
                'img'   => asset('assets/images/divisi_kominfo.webp'),
                'short' => 'Kominfo',
                'long'  => 'Komunikasi dan Informasi',
                'desc'  => 'Bertanggung jawab atas pengelolaan media sosial, publikasi informasi, dan komunikasi internal maupun eksternal.'
            ],
            [
                'img'   => asset('assets/images/divisi_pendidikan.webp'),
                'short' => 'Pendidikan',
                'long'  => 'Pendidikan',
                'desc'  => 'Fokus pada pengembangan akademik anggota melalui workshop, seminar, dan kelompok studi bersama.'
            ],
            [
                'img'   => asset('assets/images/divisi_litbang.webp'),
                'short' => 'Litbang',
                'long'  => 'Penelitian dan Pengembangan',
                'desc'  => 'Melakukan riset teknologi terbaru dan mengembangkan inovasi program kerja yang berdampak bagi himpunan.'
            ],
            [
                'img'   => asset('assets/images/divisi_rsdm.webp'),
                'short' => 'RSDM',
                'long'  => 'Rekrutmen Sumber Daya Manusia',
                'desc'  => 'Mengelola proses kaderisasi, evaluasi kinerja, dan peningkatan kualitas anggota secara berkelanjutan.'
            ],
        ];
        @endphp

        @foreach($divisions as $index => $div)
        {{-- Panel {{ $index + 1 }}: Division (100vw) --}}
        <div class="js-horizontal-panel w-screen h-screen relative flex items-end group p-6 md:p-8 lg:p-12">
            
            {{-- Background Image --}}
            <div class="absolute inset-0 overflow-hidden bg-neutral-900">
                <img src="{{ $div['img'] }}" loading="lazy" alt="Anggota Divisi {{ $div['short'] }}" class="js-panel-bg-img w-full h-full object-cover">
                {{-- Vignette Effect --}}
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_transparent_20%,_rgba(0,0,0,0.7)_100%)] pointer-events-none group-hover:bg-[radial-gradient(ellipse_at_center,_transparent_30%,_rgba(0,0,0,0.8)_100%)] transition-colors duration-1000"></div>
            </div>

            {{-- Container to Share Space (Card + Progress Bar) --}}
            <div class="relative z-10 w-full max-w-7xl mx-auto flex flex-col md:flex-row items-end justify-between gap-6 md:gap-12">
                
                {{-- Text Content (Glassmorphism Card) --}}
                <div class="flex-1 w-full bg-white/90 backdrop-blur-xl border border-white/10 p-4 md:p-6 rounded-3xl shadow-2xl transform transition-transform duration-500 hover:-translate-y-2">
                    <div class="flex flex-col md:flex-row gap-6 md:gap-10 items-center justify-between text-center md:text-left">
                        {{-- Left Side: Number & Title --}}
                        <div class="flex-shrink-0 md:w-1/3 flex flex-row items-center justify-center md:justify-start gap-4 md:gap-5">
                            <span class="text-accent-600 font-black text-6xl md:text-5xl lg:text-6xl opacity-80 block tracking-tighter leading-none mt-1">0{{ $index + 1 }}</span>
                            <div class="text-left">
                                <h3 class="font-heading font-bold text-primary-900 text-3xl lg:text-5xl mb-1">{{ $div['short'] }}</h3>
                                <h4 class="text-primary-600 font-semibold text-xs md:text-sm uppercase tracking-widest">{{ $div['long'] }}</h4>
                            </div>
                        </div>
                        
                        {{-- Right Side: Description & CTA --}}
                        <div class="flex-1 flex flex-col lg:flex-row gap-6 lg:gap-10 items-start lg:items-center border-t md:border-t-0 md:border-l border-neutral-300/30 pt-4 md:pt-0 md:pl-10">
                            <p class="text-neutral-900 text-sm md:text-base max-w-2xl leading-relaxed flex-1">
                                {{ $div['desc'] }}
                            </p>
                            
                            <x-ui.button variant="primary" size="lg" href="/divisi" class="shrink-0 bg-primary-700! hover:bg-primary-600! text-white! border-none! shadow-md w-full md:w-auto justify-center mt-2 md:mt-0">
                                Lihat selengkapnya
                            </x-ui.button>
                        </div>
                    </div>
                </div>

                {{-- Progress Bar Indicator (Outside Card, Right Side) --}}
                <div class="flex-shrink-0 flex flex-col items-end gap-2 pointer-events-none pb-4 md:pb-6">
                    <span class="text-white font-bold text-[10px] md:text-xs tracking-widest uppercase font-sans drop-shadow-md bg-black/30 px-3 py-1 rounded-full backdrop-blur-md">Lanjutkan scroll</span>
                    <div class="w-40 md:w-56 h-2 bg-neutral-900/50 rounded-full overflow-hidden shadow-inner backdrop-blur-sm border border-white/10">
                        <div class="js-horizontal-progress h-full bg-gradient-to-r from-accent-500 to-accent-400 w-0 rounded-full shadow-[0_0_15px_rgba(245,158,11,0.8)]"></div>
                    </div>
                </div>

            </div>
            
        </div>
        @endforeach

    </div>
</section>





{{-- ============================================================
     BPH SECTION
     ============================================================ --}}
<section class="py-16 md:py-24 bg-white relative overflow-hidden">
    <div class="section-container">
        
        <div class="relative w-full h-[60vh] md:h-[70vh] lg:h-[80vh] min-h-[500px] max-h-[800px] rounded-[2rem] md:rounded-[3rem] overflow-hidden group shadow-2xl">
            
            {{-- 1 Foto (Background) --}}
            <img src="{{ asset('assets/images/bph.webp') }}" loading="lazy" alt="Badan Pengurus Harian HIMSI" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000 ease-out">
            
            {{-- Overlay Gradient for Text Readability --}}
            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/30 to-transparent"></div>

            {{-- Content --}}
            <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-12 lg:p-20 z-10">
                <div class="max-w-4xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                    
                    {{-- 1 Headline --}}
                    <h2 class="font-heading font-bold text-white text-4xl md:text-6xl lg:text-7xl mb-4 md:mb-6 leading-[1.1] tracking-tight drop-shadow-lg">
                        Badan Pengurus Harian.
                    </h2>
                    
                    {{-- 1 Deskripsi --}}
                    <p class="text-neutral-200 text-base md:text-lg lg:text-xl leading-relaxed mb-8 md:mb-10 max-w-2xl font-medium drop-shadow-md">
                        Ujung tombak kepengurusan yang mengarahkan visi strategis, mengelola administrasi & keuangan, serta memastikan seluruh roda organisasi HIMSI DPC Cikarang berjalan selaras.
                    </p>

                    {{-- 1 CTA --}}
                    <div>
                        <x-ui.button variant="primary" size="xl" href="/bph" class="bg-white! hover:bg-neutral-200! text-neutral-900! border-none! shadow-xl shadow-black/20 font-bold px-8 md:px-10">
                            Kenali Kami Lebih Dekat
                        </x-ui.button>
                    </div>

                </div>
            </div>

        </div>
        
    </div>
</section>

{{-- ============================================================
     KEGIATAN SECTION (BENTO GRID)
     ============================================================ --}}
<section class="py-20 md:py-28 bg-white relative">
    <div class="section-container">
        
        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-12 lg:mb-16">
            <div class="max-w-2xl">
                <span class="text-primary-600 font-bold tracking-widest uppercase text-xs mb-3 block">Jejak Langkah</span>
                <h2 class="font-heading font-extrabold text-4xl md:text-5xl text-neutral-900 leading-tight">Agenda & Kegiatan</h2>
            </div>
            <div class="md:text-right">
                <a href="{{ route('kegiatan.index') }}" class="inline-flex items-center gap-2 text-primary-600 font-semibold hover:text-primary-800 transition-colors group">
                    Lihat Semua Kegiatan
                    <i class="ph-bold ph-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        {{-- Bento Grid Layout --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 auto-rows-[250px] md:auto-rows-[300px]">
            
            {{-- Item 1: Large Featured (2x2) --}}
            <a href="{{ route('kegiatan.show', 'makrab-2023') }}" class="md:col-span-2 md:row-span-2 relative block rounded-3xl overflow-hidden group hover:shadow-2xl transition-shadow duration-500">
                <img src="{{ asset('assets/images/bph.webp') }}" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="Malam Keakraban HIMSI">
                <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/90 via-neutral-900/40 to-transparent transition-opacity duration-500"></div>
                
                <div class="absolute inset-0 flex flex-col justify-end p-8 md:p-10">
                    <div class="transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <span class="inline-block bg-accent-500 text-neutral-900 text-xs font-bold px-3 py-1 rounded-full mb-4 shadow-lg">2023</span>
                        <h3 class="font-heading font-bold text-white text-3xl md:text-4xl lg:text-5xl leading-tight mb-2">Malam Keakraban (MAKRAB) Angkatan 2023</h3>
                    </div>
                </div>
            </a>

            {{-- Item 2: Wide (2x1) --}}
            <a href="{{ route('kegiatan.show', 'seminar-nasional-2024') }}" class="md:col-span-2 md:row-span-1 relative block rounded-3xl overflow-hidden group hover:shadow-2xl transition-shadow duration-500">
                <img src="{{ asset('assets/images/models.webp') }}" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="Seminar Nasional">
                <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/90 via-neutral-900/30 to-transparent transition-opacity duration-500"></div>
                
                <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-8">
                    <div class="transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <span class="inline-block bg-accent-500 text-neutral-900 text-xs font-bold px-3 py-1 rounded-full mb-3 shadow-lg">2024</span>
                        <h3 class="font-heading font-bold text-white text-2xl lg:text-3xl leading-tight">Seminar Nasional Teknologi Informasi</h3>
                    </div>
                </div>
            </a>

            {{-- Item 3: Small (1x1) --}}
            <a href="{{ route('kegiatan.show', 'bakti-sosial-2024') }}" class="md:col-span-1 md:row-span-1 relative block rounded-3xl overflow-hidden group hover:shadow-2xl transition-shadow duration-500">
                <img src="{{ asset('assets/images/kepengurusan_himsi.webp') }}" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="Bakti Sosial">
                <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/90 via-neutral-900/40 to-transparent transition-opacity duration-500"></div>
                
                <div class="absolute inset-0 flex flex-col justify-end p-6">
                    <div class="transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <span class="inline-block bg-accent-500 text-neutral-900 text-xs font-bold px-3 py-1 rounded-full mb-3 shadow-lg">2024</span>
                        <h3 class="font-heading font-bold text-white text-xl leading-tight">Bakti Sosial Ramadhan</h3>
                    </div>
                </div>
            </a>

            {{-- Item 4: Small (1x1) --}}
            <a href="{{ route('kegiatan.show', 'studi-banding-2023') }}" class="md:col-span-1 md:row-span-1 relative block rounded-3xl overflow-hidden group hover:shadow-2xl transition-shadow duration-500">
                <img src="{{ asset('assets/images/divisi_kominfo.webp') }}" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="Studi Banding">
                <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/90 via-neutral-900/40 to-transparent transition-opacity duration-500"></div>
                
                <div class="absolute inset-0 flex flex-col justify-end p-6">
                    <div class="transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                        <span class="inline-block bg-accent-500 text-neutral-900 text-xs font-bold px-3 py-1 rounded-full mb-3 shadow-lg">2023</span>
                        <h3 class="font-heading font-bold text-white text-xl leading-tight">Studi Banding Kampus</h3>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

{{-- ============================================================
     TESTIMONI / PESAN KETUA TERDAHULU SECTION (SWIPER THUMBS)
     ============================================================ --}}
<section class="py-24 md:py-32 bg-white relative overflow-hidden">
    <div class="section-container relative z-10">
        
        {{-- Swiper Container Main (Quotes) --}}
        <div class="swiper js-testimonial-main max-w-5xl mx-auto mb-16 px-4">
            <div class="swiper-wrapper">
                
                @php
                $testimonials = [
                    [
                        'name' => 'Alip Sutrisno',
                        'role' => 'Ketua Umum HIMSI',
                        'year' => '2025',
                        'image' => 'https://ui-avatars.com/api/?name=Alip+Sutrisno&background=random',
                        'message' => 'HIMSI bukan sekadar wadah untuk belajar berorganisasi, melainkan tempat di mana kita menemukan keluarga kedua. Bersama-sama, kita bisa membangun masa depan teknologi yang lebih baik.'
                    ],
                    [
                        'name' => 'Budi Santoso',
                        'role' => 'Ketua Umum HIMSI',
                        'year' => '2024',
                        'image' => 'https://ui-avatars.com/api/?name=Budi+Santoso&background=random',
                        'message' => 'Fondasi terkuat dari organisasi ini adalah solidaritas. Jangan pernah lelah untuk saling bahu membahu, karena satu tujuan mulia hanya bisa dicapai bila kita melangkah bersama tanpa meninggikan ego.'
                    ],
                    [
                        'name' => 'Andi Pratama',
                        'role' => 'Ketua Umum HIMSI',
                        'year' => '2023',
                        'image' => 'https://ui-avatars.com/api/?name=Andi+Pratama&background=random',
                        'message' => 'Tantangan di era digital menuntut mahasiswa Sistem Informasi untuk terus beradaptasi dan berinovasi. Jadikan HIMSI sebagai kawah candradimuka untuk melatih kepemimpinan kalian.'
                    ],
                    [
                        'name' => 'Siti Aminah',
                        'role' => 'Ketua Umum HIMSI',
                        'year' => '2022',
                        'image' => 'https://ui-avatars.com/api/?name=Siti+Aminah&background=random',
                        'message' => 'Di masa krisis pandemi, HIMSI mengajarkan saya arti dari resiliensi. Kepada pengurus masa kini, teruslah bawa semangat perubahan dan jadikan setiap rintangan sebagai batu pijakan.'
                    ],
                    [
                        'name' => 'Agus Setiawan',
                        'role' => 'Ketua Umum HIMSI',
                        'year' => '2021',
                        'image' => 'https://ui-avatars.com/api/?name=Agus+Setiawan&background=random',
                        'message' => 'Menjadi pemimpin bukan berarti selalu berada di depan, melainkan berjalan beriringan dengan seluruh anggota. Kunci sukses HIMSI ada pada kolaborasi nyata setiap divisi.'
                    ],
                    [
                        'name' => 'Rina Wijaya',
                        'role' => 'Ketua Umum HIMSI',
                        'year' => '2020',
                        'image' => 'https://ui-avatars.com/api/?name=Rina+Wijaya&background=random',
                        'message' => 'Organisasi ini adalah ruang kreasi tanpa batas. Jangan ragu untuk mencetuskan ide gila, karena dari ide-ide tak terdugalah program kerja revolusioner biasanya lahir.'
                    ],
                    [
                        'name' => 'Dwi Saputra',
                        'role' => 'Ketua Umum HIMSI',
                        'year' => '2019',
                        'image' => 'https://ui-avatars.com/api/?name=Dwi+Saputra&background=random',
                        'message' => 'Jadilah inisiator, bukan sekadar penonton. Mahasiswa Sistem Informasi DPC Cikarang selalu punya tempat khusus di garda terdepan perkembangan teknologi kampus.'
                    ],
                ];
                @endphp

                @foreach($testimonials as $testi)
                <div class="swiper-slide text-center select-none cursor-grab active:cursor-grabbing">
                    {{-- Avatar --}}
                    <div class="mb-8 flex justify-center">
                        <img src="{{ $testi['image'] }}" loading="lazy" alt="Foto {{ $testi['name'] }}" class="w-16 h-16 rounded-full object-cover shadow-sm ring-4 ring-neutral-50">
                    </div>
                    
                    {{-- Quote --}}
                    <p class="text-neutral-800 text-2xl md:text-3xl lg:text-4xl leading-snug font-medium mb-8 font-heading">
                        "{{ $testi['message'] }}"
                    </p>
                    
                    {{-- Name & Role --}}
                    <div class="text-neutral-500 text-lg">
                        <span class="font-bold text-neutral-900">{{ $testi['name'] }}</span>, {{ $testi['role'] }}
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        {{-- Swiper Container Thumbs (Navigation Bar) --}}
        <div class="relative max-w-4xl mx-auto mt-16 md:mt-20">
            {{-- Border Top Base --}}
            <div class="absolute top-0 left-0 right-0 border-t border-neutral-200"></div>
            
            {{-- Prev/Next Navigation Buttons --}}
            <div class="absolute top-1/2 -left-6 md:-left-12 -translate-y-1/2 js-thumbs-prev cursor-pointer text-neutral-400 hover:text-primary-600 transition-colors z-10 flex items-center justify-center p-2 bg-white/80 rounded-full">
                <i class="ph-bold ph-caret-left text-xl md:text-2xl"></i>
            </div>
            
            <div class="swiper js-testimonial-thumbs mx-8">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testi)
                    <div class="swiper-slide group cursor-pointer pt-6 pb-2 text-center border-t-2 border-transparent transition-all hover:border-primary-300 [&.swiper-slide-thumb-active]:border-primary-600 -mt-[1px]">
                        <span class="font-heading font-bold text-neutral-400 transition-colors group-hover:text-neutral-700 group-[.swiper-slide-thumb-active]:text-neutral-900 text-lg lg:text-2xl">{{ $testi['year'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="absolute top-1/2 -right-6 md:-right-12 -translate-y-1/2 js-thumbs-next cursor-pointer text-neutral-400 hover:text-primary-600 transition-colors z-10 flex items-center justify-center p-2 bg-white/80 rounded-full">
                <i class="ph-bold ph-caret-right text-xl md:text-2xl"></i>
            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     FAQ SECTION
     ============================================================ --}}
<section class="py-24 md:py-32 bg-neutral-50 relative overflow-hidden">
    <div class="section-container relative z-10">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-20">
            
            {{-- Left Column: Header --}}
            <div class="lg:col-span-5">
                <div class="sticky top-32">
                    <h2 class="font-heading font-bold text-neutral-900 text-4xl lg:text-5xl mb-6 leading-[1.1]">
                        Pertanyaan yang Sering Diajukan
                    </h2>
                    <p class="text-neutral-600 text-lg leading-relaxed mb-8">
                        Punya pertanyaan seputar keanggotaan, program kerja, atau kegiatan di HIMSI DPC Cikarang? Temukan jawabannya di sini.
                    </p>
                </div>
            </div>

            {{-- Right Column: Accordion --}}
            <div class="lg:col-span-7" x-data="{ active: 0 }">
                
                @php
                $faqs = [
                    [
                        'q' => 'Siapa saja yang bisa bergabung dengan HIMSI DPC Cikarang?',
                        'a' => 'Seluruh mahasiswa aktif program studi Sistem Informasi di Universitas BSI Kampus Cikarang memiliki hak untuk mendaftarkan diri sebagai anggota atau pengurus HIMSI.'
                    ],
                    [
                        'q' => 'Kapan pendaftaran pengurus baru dibuka?',
                        'a' => 'Open Recruitment (Oprec) pengurus baru biasanya diadakan satu kali dalam setahun, yaitu pada awal semester ganjil (sekitar bulan September - Oktober). Informasi resminya akan selalu diumumkan melalui Instagram @himsicikarang.'
                    ],
                    [
                        'q' => 'Apakah harus pintar coding untuk masuk HIMSI?',
                        'a' => 'Tentu tidak! HIMSI memiliki berbagai divisi, mulai dari PSDM, Litbang, hingga Kominfo. Kamu bisa belajar dan mengembangkan skill di bidang public speaking, desain grafis, manajemen acara, hingga riset teknologi bersama-sama.'
                    ],
                    [
                        'q' => 'Apa keuntungan menjadi bagian dari HIMSI?',
                        'a' => 'Kamu akan mendapatkan pengalaman berorganisasi, memperluas relasi (networking) baik di dalam maupun luar kampus, mendapatkan pelatihan soft-skill & hard-skill, serta sertifikat kepengurusan yang berguna untuk dunia kerja nanti.'
                    ],
                    [
                        'q' => 'Apakah ada iuran wajib bagi anggota?',
                        'a' => 'Ya, untuk menjalankan roda organisasi, terdapat iuran kas rutin yang jumlahnya sangat terjangkau dan telah disepakati bersama dalam musyawarah anggota.'
                    ],
                ];
                @endphp

                <div class="space-y-4">
                    @foreach($faqs as $index => $faq)
                    <div class="bg-white rounded-2xl border border-neutral-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <button @click="active === {{ $index }} ? active = null : active = {{ $index }}"
                                :aria-expanded="active === {{ $index }} ? 'true' : 'false'"
                                class="w-full flex items-center justify-between p-6 text-left focus:outline-none group">
                            <span class="font-bold text-neutral-900 text-lg pr-4 transition-colors group-hover:text-primary-600" :class="active === {{ $index }} ? 'text-primary-600' : ''">
                                {{ $faq['q'] }}
                            </span>
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-neutral-100 flex items-center justify-center text-neutral-500 transition-all duration-300 group-hover:bg-primary-50 group-hover:text-primary-600"
                                 :class="active === {{ $index }} ? '!bg-primary-50 !text-primary-600 rotate-180' : ''">
                                <i class="ph-bold ph-caret-down text-lg"></i>
                            </div>
                        </button>
                        <div x-show="active === {{ $index }}" 
                             x-collapse 
                             x-cloak>
                            <div class="px-6 pb-6">
                                <p class="text-neutral-600 leading-relaxed pt-4 border-t border-neutral-100">
                                    {{ $faq['a'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
