@extends('layouts.app')

@section('title', 'Struktur Divisi - HIMSI DPC Cikarang')

@section('content')
<main class="w-full bg-white relative overflow-hidden" data-page="divisi">

    {{-- ── Hero Section ── --}}
    <section class="js-hero-section relative min-h-[50vh] lg:min-h-[60vh] overflow-hidden bg-neutral-50 flex items-center pt-20">
        <div class="section-container relative z-10 py-24 lg:py-32 text-center mx-auto flex flex-col items-center">
            
            {{-- Badge --}}
            <x-ui.badge variant="primary" size="md" dot class="mb-8 border-primary-200 bg-primary-50 text-primary-700 backdrop-blur-md">
                Struktur Organisasi
            </x-ui.badge>
            
            {{-- Headline --}}
            <h1 class="js-hero-title font-heading font-bold text-neutral-900 text-balance mb-8 text-5xl md:text-6xl lg:text-7xl leading-[1.1] uppercase tracking-tight">
                Struktur
                <span class="text-accent-500">Divisi</span>
            </h1>
            
            {{-- Subtitle/Desc --}}
            <p class="js-hero-subtitle text-neutral-500 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                Mengenal lebih dekat divisi-divisi serta para anggotanya yang menjadi pilar penggerak utama di HIMSI DPC Cikarang.
            </p>
        </div>
    </section>


    {{-- ==========================================================
         DIVISI RSDM
         ========================================================== --}}
    <section class="py-20 md:py-28 bg-neutral-50 relative border-y border-neutral-200/60">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            
            {{-- Header & Group Photo --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-16">
                <div class="js-divisi-reveal">
                    <div class="mb-4 flex items-center gap-4">
                        <div class="h-[2px] w-10 bg-primary-500"></div>
                        <span class="text-primary-600 font-bold tracking-widest uppercase text-sm">Divisi</span>
                    </div>
                    <h2 class="font-heading font-extrabold text-4xl md:text-5xl text-neutral-900 mb-6 leading-tight">Rekrutmen Sumber Daya Manusia (RSDM)</h2>
                    <p class="text-neutral-600 text-lg leading-relaxed">
                        Divisi RSDM memegang peranan penting dalam keberlanjutan organisasi (*Soft Skill* & Manajerial). Mulai dari proses rekrutmen pengurus baru hingga menjaga solidaritas dan kinerja seluruh anggota himpunan.
                    </p>
                </div>
                <div class="js-divisi-reveal">
                    <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[16/9] lg:aspect-[4/3]">
                        <img src="{{ asset('assets/images/divisi_rsdm.webp') }}" alt="Grup Divisi RSDM" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Members Carousel --}}
            <div class="js-divisi-reveal mt-12">
                <div class="swiper js-team-swiper pb-16">
                    <div class="swiper-wrapper">
                        @php
                            $rsdmMembers = [
                                ['name' => 'Dzulfiqar Dumaid', 'nickname' => 'Dumaid', 'role' => 'Koordinator', 'image' => 'dumaid.webp', 'ig' => 'dzoeell'],
                                ['name' => 'Ahmad Fajrul Fauzi Sra', 'nickname' => 'Fajrul', 'role' => 'Anggota', 'image' => 'fajrul.webp', 'ig' => 'fajrul.296'],
                                ['name' => 'Bunga Sri Cahyaningsih', 'nickname' => 'Bunga', 'role' => 'Anggota', 'image' => 'bunga.webp', 'ig' => 'chyflowerrr_'],
                                ['name' => 'Putri Khairunnisa Kamil', 'nickname' => 'Kamil', 'role' => 'Anggota', 'image' => 'kamil.webp', 'ig' => 'kkmilyyyyy'],
                            ];
                        @endphp
                        
                        @foreach($rsdmMembers as $member)
                        <div class="swiper-slide p-2">
                            <div class="relative w-full aspect-[4/5] cursor-pointer group js-flip-card" style="perspective: 1000px;">
                                <div class="relative z-10 w-full h-full js-flip-inner" style="transform-style: preserve-3d;">
                                    {{-- Front Face --}}
                                    <div class="absolute inset-0 w-full h-full bg-white rounded-[2.5rem] border-4 border-white overflow-hidden group/front" style="backface-visibility: hidden;">
                                        <img src="{{ asset('assets/images/personil/' . $member['image']) }}" alt="{{ $member['name'] }}" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/40 to-transparent"></div>
                                        
                                        <div class="absolute bottom-0 left-0 w-full p-5 flex flex-col items-center text-center">
                                            <span class="inline-block px-3 py-1 text-[10px] font-bold tracking-widest uppercase rounded-full mb-3 {{ $member['role'] == 'Koordinator' ? 'bg-primary-500 text-white rotate-[-2deg]' : 'bg-accent-500 text-white rotate-[2deg]' }}">
                                                {{ $member['role'] }}
                                            </span>
                                            <h3 class="font-heading font-extrabold text-2xl text-white mb-1">{{ $member['nickname'] }}</h3>
                                            <p class="text-primary-200 text-xs font-medium leading-tight">{{ $member['name'] }}</p>
                                        </div>
                                    </div>
                                    {{-- Back Face --}}
                                    <div class="absolute inset-0 w-full h-full bg-white p-5 rounded-[2.5rem] border-4 border-primary-100 flex flex-col items-center justify-center gap-4" style="backface-visibility: hidden; transform: rotateY(180deg);">
                                        <img src="{{ asset('assets/images/logos/himsi.webp') }}" loading="lazy" decoding="async" class="w-16 md:w-20">
                                        <div class="flex flex-col items-center gap-2 w-full">
                                            <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-primary-50 hover:text-primary-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-[11px] border border-neutral-100">
                                                <i class="ph ph-instagram-logo text-base"></i><span class="truncate">himsi.ubsicikarang</span>
                                            </a>
                                            <a href="{{ $member['ig'] == 'unknown' ? '#' : 'https://instagram.com/' . $member['ig'] }}" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-primary-50 hover:text-primary-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-[11px] border border-neutral-100">
                                                <i class="ph ph-user text-base"></i><span class="truncate">{{ $member['ig'] }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{-- Pagination --}}
                    <div class="swiper-pagination !bottom-0"></div>
                </div>
            </div>
            
        </div>
    </section>


    {{-- ==========================================================
         DIVISI LITBANG
         ========================================================== --}}
    <section class="py-20 md:py-28 bg-white relative">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            
            {{-- Header & Group Photo --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-16">
                <div class="js-divisi-reveal lg:order-2">
                    <div class="mb-4 flex items-center gap-4">
                        <div class="h-[2px] w-10 bg-accent-500"></div>
                        <span class="text-accent-600 font-bold tracking-widest uppercase text-sm">Divisi</span>
                    </div>
                    <h2 class="font-heading font-extrabold text-4xl md:text-5xl text-neutral-900 mb-6 leading-tight">Penelitian dan Pengembangan (Litbang)</h2>
                    <p class="text-neutral-600 text-lg leading-relaxed">
                        Litbang adalah divisi yang bertanggung jawab atas riset, inovasi, dan pengembangan organisasi. Divisi ini bertugas mengevaluasi serta menciptakan solusi agar program kerja HIMSI selalu relevan dengan perkembangan zaman.
                    </p>
                </div>
                <div class="js-divisi-reveal lg:order-1">
                    <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[16/9] lg:aspect-[4/3]">
                        <img src="{{ asset('assets/images/divisi_litbang.webp') }}" alt="Grup Divisi Litbang" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Members Carousel --}}
            <div class="js-divisi-reveal mt-12">
                <div class="swiper js-team-swiper pb-16">
                    <div class="swiper-wrapper">
                        @php
                            $litbangMembers = [
                                ['name' => 'Muhammad Galang Nur Falsian', 'nickname' => 'Galang', 'role' => 'Koordinator', 'image' => 'galang.webp', 'ig' => 'falsian9'],
                                ['name' => 'Reynanda Gilang Fahnantama', 'nickname' => 'Gilang', 'role' => 'Anggota', 'image' => 'gilang.webp', 'ig' => 'reygilang22'],
                                ['name' => 'Are Yusuf Vhantofani', 'nickname' => 'Are', 'role' => 'Anggota', 'image' => 'are.webp', 'ig' => 'ree_vhantfni'],
                                ['name' => 'Nufail Alfatih', 'nickname' => 'Nufail', 'role' => 'Anggota', 'image' => 'nufail.webp', 'ig' => 'unknown'],
                            ];
                        @endphp
                        
                        @foreach($litbangMembers as $member)
                        <div class="swiper-slide p-2">
                            <div class="relative w-full aspect-[4/5] cursor-pointer group js-flip-card" style="perspective: 1000px;">
                                <div class="relative z-10 w-full h-full js-flip-inner" style="transform-style: preserve-3d;">
                                    {{-- Front Face --}}
                                    <div class="absolute inset-0 w-full h-full bg-white rounded-[2.5rem] border-4 border-white overflow-hidden group/front" style="backface-visibility: hidden;">
                                        <img src="{{ asset('assets/images/personil/' . $member['image']) }}" alt="{{ $member['name'] }}" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/40 to-transparent"></div>
                                        
                                        <div class="absolute bottom-0 left-0 w-full p-5 flex flex-col items-center text-center">
                                            <span class="inline-block px-3 py-1 text-[10px] font-bold tracking-widest uppercase rounded-full mb-3 {{ $member['role'] == 'Koordinator' ? 'bg-accent-500 text-white rotate-[2deg]' : 'bg-primary-500 text-white rotate-[-2deg]' }}">
                                                {{ $member['role'] }}
                                            </span>
                                            <h3 class="font-heading font-extrabold text-2xl text-white mb-1">{{ $member['nickname'] }}</h3>
                                            <p class="text-accent-200 text-xs font-medium leading-tight">{{ $member['name'] }}</p>
                                        </div>
                                    </div>
                                    {{-- Back Face --}}
                                    <div class="absolute inset-0 w-full h-full bg-white p-5 rounded-[2.5rem] border-4 border-accent-100 flex flex-col items-center justify-center gap-4" style="backface-visibility: hidden; transform: rotateY(180deg);">
                                        <img src="{{ asset('assets/images/logos/himsi.webp') }}" loading="lazy" decoding="async" class="w-16 md:w-20">
                                        <div class="flex flex-col items-center gap-2 w-full">
                                            <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-accent-50 hover:text-accent-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-[11px] border border-neutral-100">
                                                <i class="ph ph-instagram-logo text-base"></i><span class="truncate">himsi.ubsicikarang</span>
                                            </a>
                                            <a href="{{ $member['ig'] == 'unknown' ? '#' : 'https://instagram.com/' . $member['ig'] }}" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-accent-50 hover:text-accent-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-[11px] border border-neutral-100">
                                                <i class="ph ph-user text-base"></i><span class="truncate">{{ $member['ig'] }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination !bottom-0"></div>
                </div>
            </div>

        </div>
    </section>


    {{-- ==========================================================
         DIVISI PENDIDIKAN
         ========================================================== --}}
    <section class="py-20 md:py-28 bg-neutral-50 relative border-y border-neutral-200/60">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            
            {{-- Header & Group Photo --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-16">
                <div class="js-divisi-reveal">
                    <div class="mb-4 flex items-center gap-4">
                        <div class="h-[2px] w-10 bg-primary-500"></div>
                        <span class="text-primary-600 font-bold tracking-widest uppercase text-sm">Divisi</span>
                    </div>
                    <h2 class="font-heading font-extrabold text-4xl md:text-5xl text-neutral-900 mb-6 leading-tight">Pendidikan</h2>
                    <p class="text-neutral-600 text-lg leading-relaxed">
                        Divisi Pendidikan berfokus pada pengembangan kompetensi akademik (*Hard Skill*) seluruh anggota. Divisi ini menjadi motor penggerak dalam memfasilitasi mahasiswa untuk mendalami bidang keilmuan Sistem Informasi.
                    </p>
                </div>
                <div class="js-divisi-reveal">
                    <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[16/9] lg:aspect-[4/3]">
                        <img src="{{ asset('assets/images/divisi_pendidikan.webp') }}" alt="Grup Divisi Pendidikan" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Members Carousel --}}
            <div class="js-divisi-reveal mt-12">
                <div class="swiper js-team-swiper pb-16">
                    <div class="swiper-wrapper">
                        @php
                            $pendidikanMembers = [
                                ['name' => 'Ciputra Surya Pratama', 'nickname' => 'Ciputra', 'role' => 'Koordinator', 'image' => 'ciputra.webp', 'ig' => 'ciputra.20'],
                                ['name' => 'Muhammad Nadhif Fadhilah T.', 'nickname' => 'Nadhif', 'role' => 'Anggota', 'image' => 'nadhif.webp', 'ig' => 'mnadhifft'],
                                ['name' => 'Rivalnya Maia Putri', 'nickname' => 'Vanya', 'role' => 'Anggota', 'image' => 'vanya.webp', 'ig' => 'nyanya1706_'],
                                ['name' => 'Felicia Laura Helga Putri', 'nickname' => 'Cia', 'role' => 'Anggota', 'image' => 'cia.webp', 'ig' => 'flc.yaa'],
                            ];
                        @endphp
                        
                        @foreach($pendidikanMembers as $member)
                        <div class="swiper-slide p-2">
                            <div class="relative w-full aspect-[4/5] cursor-pointer group js-flip-card" style="perspective: 1000px;">
                                <div class="relative z-10 w-full h-full js-flip-inner" style="transform-style: preserve-3d;">
                                    {{-- Front Face --}}
                                    <div class="absolute inset-0 w-full h-full bg-white rounded-[2.5rem] border-4 border-white overflow-hidden group/front" style="backface-visibility: hidden;">
                                        <img src="{{ asset('assets/images/personil/' . $member['image']) }}" alt="{{ $member['name'] }}" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/40 to-transparent"></div>
                                        
                                        <div class="absolute bottom-0 left-0 w-full p-5 flex flex-col items-center text-center">
                                            <span class="inline-block px-3 py-1 text-[10px] font-bold tracking-widest uppercase rounded-full mb-3 {{ $member['role'] == 'Koordinator' ? 'bg-primary-500 text-white rotate-[-2deg]' : 'bg-accent-500 text-white rotate-[2deg]' }}">
                                                {{ $member['role'] }}
                                            </span>
                                            <h3 class="font-heading font-extrabold text-2xl text-white mb-1">{{ $member['nickname'] }}</h3>
                                            <p class="text-primary-200 text-xs font-medium leading-tight">{{ $member['name'] }}</p>
                                        </div>
                                    </div>
                                    {{-- Back Face --}}
                                    <div class="absolute inset-0 w-full h-full bg-white p-5 rounded-[2.5rem] border-4 border-primary-100 flex flex-col items-center justify-center gap-4" style="backface-visibility: hidden; transform: rotateY(180deg);">
                                        <img src="{{ asset('assets/images/logos/himsi.webp') }}" loading="lazy" decoding="async" class="w-16 md:w-20">
                                        <div class="flex flex-col items-center gap-2 w-full">
                                            <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-primary-50 hover:text-primary-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-[11px] border border-neutral-100">
                                                <i class="ph ph-instagram-logo text-base"></i><span class="truncate">himsi.ubsicikarang</span>
                                            </a>
                                            <a href="{{ $member['ig'] == 'unknown' ? '#' : 'https://instagram.com/' . $member['ig'] }}" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-primary-50 hover:text-primary-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-[11px] border border-neutral-100">
                                                <i class="ph ph-user text-base"></i><span class="truncate">{{ $member['ig'] }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination !bottom-0"></div>
                </div>
            </div>

        </div>
    </section>


    {{-- ==========================================================
         DIVISI KOMINFO
         ========================================================== --}}
    <section class="py-20 md:py-28 bg-white relative">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            
            {{-- Header & Group Photo --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-16">
                <div class="js-divisi-reveal lg:order-2">
                    <div class="mb-4 flex items-center gap-4">
                        <div class="h-[2px] w-10 bg-accent-500"></div>
                        <span class="text-accent-600 font-bold tracking-widest uppercase text-sm">Divisi</span>
                    </div>
                    <h2 class="font-heading font-extrabold text-4xl md:text-5xl text-neutral-900 mb-6 leading-tight">Komunikasi dan Informasi</h2>
                    <p class="text-neutral-600 text-lg leading-relaxed">
                        Divisi Kominfo berfungsi sebagai corong informasi HIMSI DPC Cikarang, baik untuk pihak internal maupun eksternal. Divisi ini mengelola segala bentuk publikasi, media sosial, dan hubungan masyarakat.
                    </p>
                </div>
                <div class="js-divisi-reveal lg:order-1">
                    <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[16/9] lg:aspect-[4/3]">
                        <img src="{{ asset('assets/images/divisi_kominfo.webp') }}" alt="Grup Divisi Kominfo" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Members Carousel --}}
            <div class="js-divisi-reveal mt-12">
                <div class="swiper js-team-swiper pb-16">
                    <div class="swiper-wrapper">
                        @php
                            $kominfoMembers = [
                                ['name' => 'Ahmad Maulana Zuhdi', 'nickname' => 'Aldi', 'role' => 'Koordinator', 'image' => 'aldi.webp', 'ig' => 'aldiizhd05'],
                                ['name' => 'Luthfia Chandra P. N.', 'nickname' => 'Luthfia', 'role' => 'Anggota', 'image' => 'luthfia.webp', 'ig' => '_narenle_'],
                                ['name' => 'Defa Raihan Agis', 'nickname' => 'Defa', 'role' => 'Anggota', 'image' => 'defa.webp', 'ig' => 'sreczy'],
                            ];
                        @endphp
                        
                        @foreach($kominfoMembers as $member)
                        <div class="swiper-slide p-2">
                            <div class="relative w-full aspect-[4/5] cursor-pointer group js-flip-card" style="perspective: 1000px;">
                                <div class="relative z-10 w-full h-full js-flip-inner" style="transform-style: preserve-3d;">
                                    {{-- Front Face --}}
                                    <div class="absolute inset-0 w-full h-full bg-white rounded-[2.5rem] border-4 border-white overflow-hidden group/front" style="backface-visibility: hidden;">
                                        <img src="{{ asset('assets/images/personil/' . $member['image']) }}" alt="{{ $member['name'] }}" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/40 to-transparent"></div>
                                        
                                        <div class="absolute bottom-0 left-0 w-full p-5 flex flex-col items-center text-center">
                                            <span class="inline-block px-3 py-1 text-[10px] font-bold tracking-widest uppercase rounded-full mb-3 {{ $member['role'] == 'Koordinator' ? 'bg-accent-500 text-white rotate-[2deg]' : 'bg-primary-500 text-white rotate-[-2deg]' }}">
                                                {{ $member['role'] }}
                                            </span>
                                            <h3 class="font-heading font-extrabold text-2xl text-white mb-1">{{ $member['nickname'] }}</h3>
                                            <p class="text-accent-200 text-xs font-medium leading-tight">{{ $member['name'] }}</p>
                                        </div>
                                    </div>
                                    {{-- Back Face --}}
                                    <div class="absolute inset-0 w-full h-full bg-white p-5 rounded-[2.5rem] border-4 border-accent-100 flex flex-col items-center justify-center gap-4" style="backface-visibility: hidden; transform: rotateY(180deg);">
                                        <img src="{{ asset('assets/images/logos/himsi.webp') }}" loading="lazy" decoding="async" class="w-16 md:w-20">
                                        <div class="flex flex-col items-center gap-2 w-full">
                                            <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-accent-50 hover:text-accent-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-[11px] border border-neutral-100">
                                                <i class="ph ph-instagram-logo text-base"></i><span class="truncate">himsi.ubsicikarang</span>
                                            </a>
                                            <a href="{{ $member['ig'] == 'unknown' ? '#' : 'https://instagram.com/' . $member['ig'] }}" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-accent-50 hover:text-accent-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-[11px] border border-neutral-100">
                                                <i class="ph ph-user text-base"></i><span class="truncate">{{ $member['ig'] }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination !bottom-0"></div>
                </div>
            </div>

        </div>
    </section>

</main>
@endsection

