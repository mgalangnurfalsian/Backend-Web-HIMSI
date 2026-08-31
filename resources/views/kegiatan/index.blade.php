@extends('layouts.app')

@section('title', 'Arsip Kegiatan — HIMSI DPC Cikarang')
@section('meta_description', 'Jelajahi seluruh arsip kegiatan, program kerja, dan kolaborasi yang diselenggarakan oleh HIMSI DPC Cikarang.')

@section('content')

    {{-- ── Hero Section ── --}}
    <section class="js-hero-section relative min-h-[50vh] lg:min-h-[60vh] overflow-hidden bg-neutral-50 flex items-center pt-20">
        <div class="section-container relative z-10 py-24 lg:py-32 text-center mx-auto flex flex-col items-center">
            
            {{-- Badge --}}
            <x-ui.badge variant="primary" size="md" dot class="mb-8 border-primary-200 bg-primary-50 text-primary-700 shadow-sm backdrop-blur-md">
                Eksplorasi
            </x-ui.badge>
            
            {{-- Headline --}}
            <h1 class="js-hero-title font-heading font-bold text-neutral-900 text-balance mb-8 text-5xl md:text-6xl lg:text-7xl leading-[1.1] uppercase tracking-tight">
                Arsip 
                <span class="text-accent-500">Kegiatan</span>
            </h1>
            
            {{-- Subtitle/Desc --}}
            <p class="js-hero-subtitle text-neutral-500 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                Rekam jejak seluruh kegiatan, program kerja, dan agenda kolaborasi yang telah diselenggarakan oleh HIMSI DPC Cikarang.
            </p>
        </div>
    </section>

{{-- ============================================================
     SEARCH & FILTER BAR
     ============================================================ --}}
<section class="bg-white py-6 md:py-8 border-b border-neutral-200 sticky top-[70px] z-40 shadow-sm shadow-neutral-200/50">
    <div class="section-container">
        <form action="#" class="flex flex-col md:flex-row gap-4 max-w-5xl mx-auto">
            
            {{-- Search Input --}}
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                    <i class="ph-bold ph-magnifying-glass text-neutral-400 text-xl"></i>
                </div>
                <input type="text" placeholder="Cari kegiatan (Contoh: Makrab, Seminar...)" class="w-full pl-14 pr-5 py-4 rounded-2xl border-none ring-1 ring-neutral-200 focus:ring-2 focus:ring-primary-500 shadow-inner text-neutral-800 bg-neutral-50 placeholder-neutral-400 outline-none transition-all text-base md:text-lg">
            </div>
            
            {{-- Filter & Submit --}}
            <div class="flex gap-3 md:gap-4">
                <div class="relative min-w-[140px]">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="ph-bold ph-calendar-blank text-neutral-400 text-lg"></i>
                    </div>
                    <select class="w-full pl-11 pr-10 py-4 rounded-2xl border-none ring-1 ring-neutral-200 focus:ring-2 focus:ring-primary-500 shadow-inner text-neutral-800 bg-neutral-50 outline-none cursor-pointer appearance-none font-medium transition-all">
                        <option value="">Semua Tahun</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                        <i class="ph-bold ph-caret-down text-neutral-400"></i>
                    </div>
                </div>
                
                <button type="button" class="rounded-2xl px-8 bg-primary-600 hover:bg-primary-700 active:bg-primary-800 text-white font-bold shadow-lg shadow-primary-500/30 transition-all flex items-center gap-2">
                    Cari
                </button>
            </div>
        </form>
    </div>
</section>

{{-- ============================================================
     ACTIVITY GRID SECTION
     ============================================================ --}}
<section class="py-20 md:py-28 bg-neutral-50">
    <div class="section-container">
        
        @php
        // Data dummy: Terurut dari yang paling baru (2024 -> 2023)
        $kegiatans = [
            [
                'slug' => 'seminar-nasional-2024',
                'title' => 'Seminar Nasional Teknologi Informasi',
                'date' => '24 November 2024',
                'year' => '2024',
                'image' => asset('assets/images/models.webp'),
                'excerpt' => 'Menghadirkan pakar industri untuk membahas tren AI dan masa depan pengembangan perangkat lunak bagi mahasiswa IT.'
            ],
            [
                'slug' => 'bakti-sosial-2024',
                'title' => 'Bakti Sosial Ramadhan 1445 H',
                'date' => '05 April 2024',
                'year' => '2024',
                'image' => asset('assets/images/kepengurusan_himsi.webp'),
                'excerpt' => 'Berbagi kebahagiaan dan sembako bersama anak yatim dan kaum dhuafa di sekitar lingkungan kampus UBSI Cikarang.'
            ],
            [
                'slug' => 'makrab-2023',
                'title' => 'Malam Keakraban (MAKRAB) Angkatan 2023',
                'date' => '15 September 2023',
                'year' => '2023',
                'image' => asset('assets/images/bph.webp'),
                'excerpt' => 'Membangun solidaritas dan kekeluargaan mahasiswa baru Sistem Informasi angkatan 2023 lewat kemah bersama.'
            ],
            [
                'slug' => 'studi-banding-2023',
                'title' => 'Studi Banding Organisasi',
                'date' => '20 Agustus 2023',
                'year' => '2023',
                'image' => asset('assets/images/divisi_kominfo.webp'),
                'excerpt' => 'Kunjungan studi ke himpunan universitas ternama untuk bertukar wawasan seputar tata kelola himpunan mahasiswa.'
            ],
            [
                'slug' => 'workshop-uiux-2023',
                'title' => 'Workshop UI/UX Design Fundamental',
                'date' => '12 Juni 2023',
                'year' => '2023',
                'image' => asset('assets/images/divisi_pendidikan.webp'),
                'excerpt' => 'Pelatihan intensif perancangan antarmuka pengguna (UI) bagi pemula menggunakan tools Figma dan studi kasus nyata.'
            ],
            [
                'slug' => 'donor-darah-2023',
                'title' => 'Aksi Donor Darah HIMSI',
                'date' => '10 Februari 2023',
                'year' => '2023',
                'image' => asset('assets/images/divisi_litbang.webp'),
                'excerpt' => 'Aksi sosial kemanusiaan donor darah yang diselenggarakan berkolaborasi dengan PMI Kabupaten Bekasi.'
            ],
        ];
        @endphp

        {{-- Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            @foreach($kegiatans as $item)
            <a href="{{ route('kegiatan.show', $item['slug']) }}" class="group flex flex-col bg-white rounded-[2rem] overflow-hidden hover:shadow-2xl transition-all duration-500 border border-neutral-200 hover:border-primary-200 hover:-translate-y-2">
                {{-- Card Image --}}
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ $item['image'] }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="{{ $item['title'] }}">
                    <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/70 via-neutral-900/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    
                    {{-- Badges --}}
                    <div class="absolute top-5 right-5">
                        <span class="bg-accent-500 text-neutral-900 text-xs font-bold px-4 py-1.5 rounded-full shadow-lg">{{ $item['year'] }}</span>
                    </div>
                    
                    <div class="absolute bottom-5 left-5 flex items-center text-white text-sm font-medium gap-2">
                        <i class="ph-bold ph-calendar-blank text-lg text-primary-300"></i>
                        {{ $item['date'] }}
                    </div>
                </div>
                
                {{-- Card Body --}}
                <div class="p-6 md:p-8 flex flex-col flex-1">
                    <h3 class="font-heading font-bold text-2xl text-neutral-900 mb-4 group-hover:text-primary-600 transition-colors leading-tight">{{ $item['title'] }}</h3>
                    <p class="text-neutral-500 text-base leading-relaxed mb-8 flex-1 line-clamp-3">{{ $item['excerpt'] }}</p>
                    
                    <div class="flex items-center text-primary-600 font-extrabold text-sm uppercase tracking-widest group-hover:text-primary-800 transition-colors mt-auto">
                        Baca Selengkapnya
                        <i class="ph-bold ph-arrow-right ml-3 transform group-hover:translate-x-2 transition-transform text-lg"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        {{-- Pagination (Dummy) --}}
        <div class="mt-20 flex justify-center">
            <nav class="flex items-center gap-2">
                <a href="#" class="w-12 h-12 flex items-center justify-center rounded-full bg-white text-neutral-400 cursor-not-allowed border border-neutral-200">
                    <i class="ph-bold ph-caret-left text-lg"></i>
                </a>
                <a href="#" class="w-12 h-12 flex items-center justify-center rounded-full bg-primary-600 text-white font-bold shadow-lg shadow-primary-500/30">1</a>
                <a href="#" class="w-12 h-12 flex items-center justify-center rounded-full bg-white text-neutral-600 hover:bg-neutral-100 hover:text-primary-600 transition-colors font-bold border border-neutral-200">2</a>
                <a href="#" class="w-12 h-12 flex items-center justify-center rounded-full bg-white text-neutral-600 hover:bg-neutral-100 hover:text-primary-600 transition-colors font-bold border border-neutral-200">3</a>
                <span class="text-neutral-400 px-3 font-bold">...</span>
                <a href="#" class="w-12 h-12 flex items-center justify-center rounded-full bg-white text-neutral-600 hover:bg-neutral-100 hover:text-primary-600 transition-colors font-bold border border-neutral-200">
                    <i class="ph-bold ph-caret-right text-lg"></i>
                </a>
            </nav>
        </div>
        
    </div>
</section>

@endsection
