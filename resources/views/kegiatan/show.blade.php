@extends('layouts.app')

@section('title', 'Malam Keakraban HIMSI 2023 — HIMSI DPC Cikarang')
@section('meta_description', 'Detail kegiatan Malam Keakraban HIMSI DPC Cikarang.')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="relative min-h-[85vh] lg:min-h-screen flex items-end pt-20">
    {{-- Full Bleed Background Image --}}
    <div class="absolute inset-0 bg-neutral-900">
        <img src="{{ asset('assets/images/bph.webp') }}" alt="Malam Keakraban" class="w-full h-full object-cover">
        
        {{-- Elegant Dark Overlays --}}
        <div class="absolute inset-0 bg-gradient-to-b from-neutral-900/40 via-neutral-900/20 to-neutral-900/95"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,_rgba(0,0,0,0.8)_0%,_transparent_70%)]"></div>
    </div>

    {{-- Content overlay --}}
    <div class="relative z-10 w-full section-container pb-16 md:pb-24">
        
        {{-- Breadcrumbs / Tags --}}
        <div class="flex flex-wrap items-center gap-3 mb-6 md:mb-8">
            <a href="/" class="text-neutral-300 hover:text-white transition-colors text-sm font-medium">Beranda</a>
            <i class="ph-bold ph-caret-right text-neutral-500 text-xs"></i>
            <a href="/#kegiatan" class="text-neutral-300 hover:text-white transition-colors text-sm font-medium">Kegiatan</a>
            <i class="ph-bold ph-caret-right text-neutral-500 text-xs"></i>
            <span class="bg-accent-500 text-neutral-900 px-3 py-1 text-xs font-bold rounded-full shadow-lg">2023</span>
            <span class="bg-white/20 backdrop-blur-md text-white border border-white/20 px-3 py-1 text-xs font-bold rounded-full shadow-lg">Pengkaderan</span>
        </div>

        {{-- Massive Headline --}}
        <h1 class="font-heading font-extrabold text-white text-5xl md:text-7xl lg:text-[5.5rem] leading-[1.05] tracking-tight mb-6 md:mb-10 max-w-5xl drop-shadow-xl text-balance">
            Malam Keakraban (MAKRAB) Angkatan 2023
        </h1>
        
        {{-- Meta Information Bar --}}
        <div class="flex flex-wrap gap-x-12 gap-y-6 border-t border-white/20 pt-8 max-w-4xl">
            <div>
                <span class="block text-neutral-400 text-xs font-bold tracking-widest uppercase mb-1">Tanggal</span>
                <span class="text-white font-medium text-lg">15 - 17 September 2023</span>
            </div>
            <div>
                <span class="block text-neutral-400 text-xs font-bold tracking-widest uppercase mb-1">Lokasi</span>
                <span class="text-white font-medium text-lg">Villa Kancil, Lembang</span>
            </div>
            <div>
                <span class="block text-neutral-400 text-xs font-bold tracking-widest uppercase mb-1">Penyelenggara</span>
                <span class="text-white font-medium text-lg">Divisi RSDM</span>
            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     ARTICLE CONTENT SECTION
     ============================================================ --}}
<section class="bg-white relative py-20 md:py-28 overflow-hidden">
    <div class="section-container relative z-10 flex flex-col lg:flex-row gap-16 lg:gap-24">
        
        {{-- Left: Main Article Body --}}
        <div class="flex-1 w-full max-w-3xl">
            
            {{-- Lead Paragraph with Drop Cap --}}
            <p class="text-neutral-800 text-xl md:text-2xl leading-relaxed mb-10 font-medium first-letter:float-left first-letter:text-7xl md:first-letter:text-8xl first-letter:pr-3 first-letter:font-heading first-letter:font-black first-letter:text-primary-700 first-letter:leading-[0.8]">
                Malam Keakraban (Makrab) HIMSI DPC Cikarang tahun 2023 menjadi salah satu agenda terbesar yang menandai langkah awal kebersamaan mahasiswa Sistem Informasi angkatan baru. Mengusung tema "Harmoni dalam Perbedaan", acara ini bukan sekadar rutinitas kaderisasi, melainkan ruang pembentukan karakter dan kekeluargaan.
            </p>

            {{-- Standard Prose --}}
            <div class="prose prose-lg prose-neutral max-w-none text-neutral-600 prose-headings:font-heading prose-headings:font-bold prose-headings:text-neutral-900 prose-a:text-primary-600 hover:prose-a:text-primary-800 prose-img:rounded-3xl prose-img:shadow-xl">
                
                <h3 class="text-3xl mt-12 mb-6">Membangun Fondasi Solidaritas</h3>
                <p>
                    Selama tiga hari dua malam, para peserta diajak keluar dari zona nyaman melalui serangkaian kegiatan yang dirancang khusus oleh Divisi Rekrutmen Sumber Daya Manusia (RSDM). Mulai dari diskusi kepemimpinan, simulasi pemecahan masalah (<i>problem solving</i>) dalam tim, hingga jelajah malam yang menguji mental dan empati.
                </p>
                <p>
                    Berbeda dengan konsep perpeloncoan masa lalu, Makrab HIMSI Cikarang mengedepankan pendekatan humanis. "Tujuan utama kita adalah memastikan bahwa setiap mahasiswa merasa diterima dan memiliki rumah di HIMSI. Di sini, tidak ada senioritas yang menjatuhkan, yang ada hanyalah kakak tingkat yang siap membimbing," ujar Alip Sutrisno, Ketua Pelaksana Makrab 2023.
                </p>

                {{-- Pull Quote --}}
                <blockquote class="my-12 border-l-4 border-accent-500 pl-6 md:pl-8 italic text-2xl md:text-3xl font-heading text-primary-900 font-medium bg-neutral-50/50 py-6 rounded-r-2xl">
                    "Tujuan utama kita adalah memastikan bahwa setiap mahasiswa merasa diterima dan memiliki rumah di HIMSI. Tidak ada senioritas yang menjatuhkan."
                </blockquote>

                <h3 class="text-3xl mt-12 mb-6">Rangkaian Acara Puncak</h3>
                <p>
                    Puncak acara terjadi pada malam kedua di mana seluruh peserta dan panitia berkumpul mengelilingi api unggun. Suasana yang tadinya penuh dengan tawa dan sorak sorai perlahan berubah menjadi hening dan haru saat sesi renungan malam dimulai. Di momen inilah sekat-sekat perbedaan mulai runtuh.
                </p>
                <p>
                    Acara ditutup pada hari ketiga dengan deklarasi angkatan dan penyerahan simbolis kemeja angkatan. Dengan berakhirnya kegiatan ini, diharapkan angkatan 2023 dapat menjadi agen perubahan yang solutif, adaptif, dan membawa inovasi baru bagi himpunan maupun kampus.
                </p>

            </div>

        </div>

        {{-- Right: Sidebar (Documentation & Quick Links) --}}
        <div class="lg:w-80 shrink-0">
            <div class="sticky top-28 space-y-12">
                
                {{-- Mini Gallery --}}
                <div>
                    <h4 class="font-heading font-bold text-2xl text-neutral-900 mb-6">Sekilas Dokumentasi</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <img src="{{ asset('assets/images/models.webp') }}" class="w-full h-24 object-cover rounded-xl shadow-md hover:scale-105 transition-transform" alt="Dokumentasi 1">
                        <img src="{{ asset('assets/images/kepengurusan_himsi.webp') }}" class="w-full h-24 object-cover rounded-xl shadow-md hover:scale-105 transition-transform" alt="Dokumentasi 2">
                        <img src="{{ asset('assets/images/divisi_kominfo.webp') }}" class="w-full h-24 object-cover rounded-xl shadow-md hover:scale-105 transition-transform" alt="Dokumentasi 3">
                        <div class="w-full h-24 bg-primary-100 rounded-xl shadow-md flex items-center justify-center cursor-pointer hover:bg-primary-200 transition-colors">
                            <span class="text-primary-700 font-bold text-sm">+24 Foto</span>
                        </div>
                    </div>
                </div>

                {{-- Share Box --}}
                <div class="bg-neutral-50 p-6 rounded-3xl border border-neutral-200">
                    <h4 class="font-heading font-bold text-lg text-neutral-900 mb-4">Bagikan Kegiatan</h4>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-white border border-neutral-300 rounded-full flex items-center justify-center text-neutral-600 hover:text-primary-600 hover:border-primary-600 hover:shadow-md transition-all">
                            <i class="ph-bold ph-whatsapp-logo text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white border border-neutral-300 rounded-full flex items-center justify-center text-neutral-600 hover:text-primary-600 hover:border-primary-600 hover:shadow-md transition-all">
                            <i class="ph-bold ph-twitter-logo text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white border border-neutral-300 rounded-full flex items-center justify-center text-neutral-600 hover:text-primary-600 hover:border-primary-600 hover:shadow-md transition-all">
                            <i class="ph-bold ph-link text-lg"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</section>

{{-- ============================================================
     BENTO GALLERY SECTION
     ============================================================ --}}
<section class="py-20 md:py-32 bg-neutral-950 text-white border-t border-neutral-900">
    <div class="section-container">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="font-heading font-extrabold text-3xl md:text-5xl leading-tight mb-4">Momen Terekam</h2>
            <p class="text-neutral-400 text-lg">Arsip visual dari seluruh rangkaian kegiatan Malam Keakraban 2023.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 auto-rows-[150px] md:auto-rows-[300px]">
            <div class="col-span-2 row-span-2 rounded-3xl overflow-hidden group">
                <img src="{{ asset('assets/images/bph.webp') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" alt="Gallery">
            </div>
            <div class="col-span-2 row-span-1 rounded-3xl overflow-hidden group">
                <img src="{{ asset('assets/images/kepengurusan_himsi.webp') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" alt="Gallery">
            </div>
            <div class="col-span-1 row-span-1 rounded-3xl overflow-hidden group">
                <img src="{{ asset('assets/images/models.webp') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" alt="Gallery">
            </div>
            <div class="col-span-1 row-span-1 rounded-3xl overflow-hidden group">
                <img src="{{ asset('assets/images/divisi_kominfo.webp') }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" alt="Gallery">
            </div>
        </div>
        
        <div class="text-center mt-12 md:mt-16">
             <x-ui.button variant="primary" size="lg" href="#" class="bg-white! hover:bg-neutral-200! text-neutral-900! font-bold shadow-glow">
                 Muat Lebih Banyak
             </x-ui.button>
        </div>
    </div>
</section>

@endsection
