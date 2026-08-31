@extends('layouts.app')
@section('title', 'Sejarah — HIMSI DPC Cikarang')

@section('content')
<main class="relative" data-page="sejarah">

    {{-- ── Hero Section ── --}}
    <section class="js-hero-section relative min-h-[50vh] lg:min-h-[60vh] overflow-hidden bg-neutral-50 flex items-center pt-20">
        <div class="section-container relative z-10 py-24 lg:py-32 text-center mx-auto flex flex-col items-center">
            
            {{-- Badge --}}
            <x-ui.badge variant="primary" size="md" dot class="mb-8 border-primary-200 bg-primary-50 text-primary-700 shadow-sm backdrop-blur-md">
                Profil & Sejarah
            </x-ui.badge>
            
            {{-- Headline --}}
            <h1 class="js-hero-title font-heading font-bold text-neutral-900 text-balance mb-8 text-5xl md:text-6xl lg:text-7xl leading-[1.1] uppercase tracking-tight">
                Perjalanan <br>
                <span class="text-accent-500">HIMSI DPC Cikarang</span>
            </h1>
            
            {{-- Subtitle/Desc --}}
            <p class="js-hero-subtitle text-neutral-500 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                Mengenal lebih dekat sejarah, visi misi, serta makna di balik identitas Himpunan Mahasiswa Sistem Informasi DPC Cikarang dari masa ke masa.
            </p>
        </div>
    </section>

    {{-- ── Sub Navigation (Sticky) ── --}}
    <nav class="sticky top-[70px] z-40 w-full bg-white/90 backdrop-blur-md border-y border-neutral-200 shadow-sm hidden md:block">
        <div class="section-container">
            <div class="flex items-center justify-between">
                <a href="#perjalanan" class="flex-1 text-center block py-4 text-md font-medium text-neutral-600 hover:text-primary-500 hover:bg-neutral-50 transition-colors border-r border-neutral-200 last:border-0">Perjalanan</a>
                <a href="#visi-misi" class="flex-1 text-center block py-4 text-md font-medium text-neutral-600 hover:text-primary-500 hover:bg-neutral-50 transition-colors border-r border-neutral-200 last:border-0">Visi dan Misi</a>
                <a href="#makna-logo" class="flex-1 text-center block py-4 text-md font-medium text-neutral-600 hover:text-primary-500 hover:bg-neutral-50 transition-colors border-r border-neutral-200 last:border-0">Makna Logo</a>
                <a href="#struktur-organisasi" class="flex-1 text-center block py-4 text-md font-medium text-neutral-600 hover:text-primary-500 hover:bg-neutral-50 transition-colors border-r border-neutral-200 last:border-0">Struktur Organisasi</a>
            </div>
        </div>
    </nav>
    {{-- ── Interactive History Slider (Perjalanan) ── --}}
    <section id="perjalanan" class="relative w-full h-[calc(100vh-127px)] bg-neutral-900 js-history-slider">
        
        {{-- Slide 1: 2006-2011 --}}
        <div class="js-history-slide absolute inset-0 z-10 transition-opacity duration-1000 ease-in-out opacity-100" data-index="0">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center"></div>
            <div class="absolute inset-0 bg-neutral-900/70"></div> {{-- Dark Overlay --}}
            
            <div class="relative z-10 h-full flex flex-col justify-center px-6 md:px-20 pt-20">
                <div class="max-w-3xl">
                    <h3 class="text-white font-heading font-bold text-lg md:text-xl mb-2">2006-2011</h3>
                    <h2 class="text-white font-heading font-extrabold text-xl md:text-3xl uppercase tracking-tight leading-tight mb-6">
                        HIMPUNAN MAHASISWA MANAJEMEN INFORMATIKA
                    </h2>
                    <p class="text-neutral-200 text-lg leading-relaxed mb-4">
                        Himpunan Mahasiswa Manajemen Informatika (HiMMI) merupakan akar sejarah paling awal yang menjadi cikal bakal berdirinya HIMSI seperti yang kita kenal saat ini. Organisasi ini resmi terbentuk pada tanggal 23 Juli 2006, berlokasi di kampus UBSI Fatmawati sebagai pusat pergerakan mahasiswa Manajemen Informatika pada masa itu. Pendirian HiMMI didorong oleh semangat untuk mewadahi aspirasi mahasiswa dalam berkontribusi, bertanggung jawab, dan berprestasi, baik di bidang akademik maupun non-akademik.
                    </p>
                </div>
            </div>
        </div>

        {{-- Slide 2: 2013-2016 --}}
        <div class="js-history-slide absolute inset-0 z-10 transition-opacity duration-1000 ease-in-out opacity-0 pointer-events-none" data-index="1">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1544531586-fde5298cdd40?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center"></div>
            <div class="absolute inset-0 bg-neutral-900/70"></div>
            
            <div class="relative z-10 h-full flex flex-col justify-center px-6 md:px-20 pt-20">
                <div class="max-w-3xl">
                    <h3 class="text-white font-heading font-bold text-lg md:text-xl mb-2">2013-2016</h3>
                    <h2 class="text-white font-heading font-extrabold text-xl md:text-3xl uppercase tracking-tight leading-tight mb-6">
                        TRANSFORMASI MENUJU SISTEM INFORMASI
                    </h2>
                    <p class="text-neutral-200 text-lg leading-relaxed mb-4">
                        Seiring dengan perkembangan kurikulum dan kebutuhan industri, program studi Manajemen Informatika perlahan bertransformasi menjadi Sistem Informasi. Masa ini adalah masa transisi yang krusial bagi himpunan untuk beradaptasi dengan perubahan nomenklatur dan fokus akademik.
                    </p>
                </div>
            </div>
        </div>

        {{-- Slide 3: 2016-Sekarang --}}
        <div class="js-history-slide absolute inset-0 z-10 transition-opacity duration-1000 ease-in-out opacity-0 pointer-events-none" data-index="2">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center"></div>
            <div class="absolute inset-0 bg-neutral-900/70"></div>
            
            <div class="relative z-10 h-full flex flex-col justify-center px-6 md:px-20 pt-20">
                <div class="max-w-3xl">
                    <h3 class="text-white font-heading font-bold text-lg md:text-xl mb-2">2016-Sekarang</h3>
                    <h2 class="text-white font-heading font-extrabold text-xl md:text-3xl uppercase tracking-tight leading-tight mb-6">
                        HIMSI DPC CIKARANG ERA MODERN
                    </h2>
                    <p class="text-neutral-200 text-lg leading-relaxed mb-4">
                        Di era modern, HIMSI DPC Cikarang berfokus pada kolaborasi, inovasi teknologi, dan pengembangan soft skill anggotanya. Menghadapi tantangan industri 4.0, HIMSI terus berupaya menjadi inkubator talenta digital yang kompeten dan berdaya saing tinggi.
                    </p>
                </div>
            </div>
        </div>

        {{-- Slider Navigation & Progress Bar --}}
        <div class="absolute top-0 left-0 right-0 z-30 pt-8 px-6 md:px-20">
            <div class="flex items-center gap-6 md:gap-12 relative">
                
                {{-- Nav Items --}}
                <button class="js-history-nav flex flex-col gap-3 text-white/60 hover:text-white transition-colors cursor-pointer group outline-none flex-1" data-target="0">
                    <div class="flex items-center gap-3">
                        <div class="w-3 h-3 rounded-full bg-white/40 transition-colors group-hover:bg-white/80 js-nav-dot flex-shrink-0"></div>
                        <span class="font-bold text-sm md:text-base tracking-wide truncate">2006-2011</span>
                    </div>
                    <div class="w-full h-1.5 bg-white/20 rounded-full overflow-hidden">
                        <div class="h-full bg-accent-500 js-history-progress" style="width: 0%;"></div>
                    </div>
                </button>

                <button class="js-history-nav flex flex-col gap-3 text-white/60 hover:text-white transition-colors cursor-pointer group outline-none flex-1" data-target="1">
                    <div class="flex items-center gap-3">
                        <div class="w-3 h-3 rounded-full bg-white/40 transition-colors group-hover:bg-white/80 js-nav-dot flex-shrink-0"></div>
                        <span class="font-bold text-sm md:text-base tracking-wide truncate">2013-2016</span>
                    </div>
                    <div class="w-full h-1.5 bg-white/20 rounded-full overflow-hidden">
                        <div class="h-full bg-accent-500 js-history-progress" style="width: 0%;"></div>
                    </div>
                </button>

                <button class="js-history-nav flex flex-col gap-3 text-white/60 hover:text-white transition-colors cursor-pointer group outline-none flex-1" data-target="2">
                    <div class="flex items-center gap-3">
                        <div class="w-3 h-3 rounded-full bg-white/40 transition-colors group-hover:bg-white/80 js-nav-dot flex-shrink-0"></div>
                        <span class="font-bold text-sm md:text-base tracking-wide truncate">2016-Sekarang</span>
                    </div>
                    <div class="w-full h-1.5 bg-white/20 rounded-full overflow-hidden">
                        <div class="h-full bg-accent-500 js-history-progress" style="width: 0%;"></div>
                    </div>
                </button>

            </div>
        </div>

    </section>

    {{-- ── Visi dan Misi Section ── --}}
    <section id="visi-misi" class="section-container relative pt-32 pb-24">
        
        <div class="max-w-7xl mx-auto">
            
            {{-- VISI --}}
            <div class="mb-20">
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-neutral-900 mb-6">Visi</h2>
                
                <p class="text-primary-600 font-medium text-lg mb-6">
                    Menjadi wadah aspirasi dan pengembangan potensi mahasiswa Sistem Informasi DPC Cikarang yang solid, inovatif, dan berdaya saing tinggi.
                </p>
                
                <p class="text-neutral-600 leading-relaxed mb-6">
                    HIMSI DPC Cikarang berkomitmen untuk menjadi organisasi kemahasiswaan yang tidak hanya menjalankan kegiatan dengan landasan kekeluargaan yang kuat, tetapi juga berperan strategis dalam mendukung kompetensi mahasiswa Sistem Informasi, khususnya dalam memperkuat inovasi, memastikan kolaborasi, serta mendorong keunggulan teknologi di tingkat nasional maupun internasional.
                </p>

                <ol class="list-decimal pl-6 text-neutral-600 space-y-3">
                    <li><span class="font-medium text-neutral-800">Inovasi Teknologi:</span> Mendorong pengembangan solusi kreatif berbasis teknologi informasi.</li>
                    <li><span class="font-medium text-neutral-800">Sinergi Berkelanjutan:</span> Memperkuat kolaborasi antar mahasiswa, alumni, dan civitas akademika.</li>
                    <li><span class="font-medium text-neutral-800">Keunggulan Daya Saing:</span> Meningkatkan kompetensi mahasiswa agar siap menghadapi tantangan industri digital.</li>
                </ol>
            </div>

            {{-- MISI --}}
            <div>
                <h2 class="font-heading font-bold text-3xl md:text-4xl text-neutral-900 mb-6">Misi</h2>
                
                <p class="text-primary-600 font-medium text-lg mb-6">
                    Menyediakan ekosistem pembelajaran melalui program kerja inovatif yang memberi nilai tambah untuk mahasiswa.
                </p>
                
                <p class="text-neutral-600 leading-relaxed mb-6">
                    Misi untuk mengembangkan potensi mahasiswa melalui solusi inovatif mencerminkan komitmen himpunan dalam menghadirkan program yang adaptif, berkelanjutan, dan relevan dengan dinamika perkembangan industri teknologi global. Upaya tersebut dilakukan melalui fokus pada pilar pengembangan kompetensi inti, yaitu penguatan <i>Hard Skill</i> (pemrograman, jaringan) dan <i>Soft Skill</i> (kepemimpinan, manajemen waktu).
                </p>

                <ol class="list-decimal pl-6 text-neutral-600 space-y-3">
                    <li>Membangun iklim organisasi yang harmonis dan kolaboratif antar mahasiswa, dosen, serta pihak eksternal.</li>
                    <li>Menyelenggarakan program kerja, pelatihan, dan workshop teknis yang terstruktur.</li>
                    <li>Mendorong anggota untuk aktif berkarya dan berinovasi menciptakan solusi berbasis teknologi informasi yang bermanfaat bagi masyarakat luas.</li>
                </ol>
            </div>
            
        </div>
    </section>

    {{-- ── Makna Logo Section ── --}}
    <section id="makna-logo" class="section-container relative py-24 md:py-32 bg-neutral-50">
        
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">
                
                {{-- Logo Display --}}
                <div class="lg:col-span-5 rounded-3xl p-12 md:p-20 flex items-center justify-center sticky top-32">
                    <img src="{{ asset('assets/images/logos/himsi.webp') }}" alt="Logo HIMSI DPC Cikarang" class="w-full max-w-[650px] drop-shadow-md hover:scale-105 transition-transform duration-500">
                </div>

                {{-- Logo Elements Meaning --}}
                <div class="lg:col-span-7">
                    
                    {{-- Makna Simbol --}}
                    <div class="mb-12">
                        <h3 class="font-heading font-extrabold text-2xl md:text-3xl text-neutral-900 mb-8 border-b border-neutral-200 pb-4">Makna Simbol</h3>
                        <div class="space-y-8">
                            {{-- Element 1 --}}
                            <div>
                                <h4 class="font-heading font-bold text-lg md:text-xl text-primary-600 mb-2 flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-primary-500"></span>
                                    Perisai
                                </h4>
                                <p class="text-neutral-600 leading-relaxed pl-5">
                                    Melambangkan perlindungan, ketahanan, dan kesolidan organisasi HIMSI sebagai wadah yang melindungi serta menaungi seluruh aspirasi mahasiswa Sistem Informasi.
                                </p>
                            </div>

                            {{-- Element 2 --}}
                            <div>
                                <h4 class="font-heading font-bold text-lg md:text-xl text-primary-600 mb-2 flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-primary-500"></span>
                                    Tiga Puncak Perisai
                                </h4>
                                <p class="text-neutral-600 leading-relaxed pl-5">
                                    Merepresentasikan Tri Dharma Perguruan Tinggi (Pendidikan, Penelitian, dan Pengabdian Masyarakat) yang menjadi landasan utama pergerakan setiap mahasiswa di bawah naungan HIMSI.
                                </p>
                            </div>

                            {{-- Element 3 --}}
                            <div>
                                <h4 class="font-heading font-bold text-lg md:text-xl text-primary-600 mb-2 flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-primary-500"></span>
                                    Lingkaran Pusat
                                </h4>
                                <p class="text-neutral-600 leading-relaxed pl-5">
                                    Melambangkan persatuan yang tidak terputus dan sinergi antar anggota.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Makna Warna --}}
                    <div>
                        <h3 class="font-heading font-extrabold text-2xl md:text-3xl text-neutral-900 mb-8 border-b border-neutral-200 pb-4">Makna Warna</h3>
                        <div class="space-y-8">
                            {{-- Element 1 --}}
                            <div>
                                <h4 class="font-heading font-bold text-lg md:text-xl text-primary-600 mb-2 flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-primary-500"></span>
                                    Warna Biru
                                </h4>
                                <p class="text-neutral-600 leading-relaxed pl-5">
                                    Melambangkan profesionalisme, kepercayaan, dan kedalaman ilmu pengetahuan di bidang teknologi informasi.
                                </p>
                            </div>
                            
                            {{-- Element 2 --}}
                            <div>
                                <h4 class="font-heading font-bold text-lg md:text-xl text-blue-400 mb-2 flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-blue-300"></span>
                                    Warna Biru Muda
                                </h4>
                                <p class="text-neutral-600 leading-relaxed pl-5">
                                    Memberikan kesan inovasi, keterbukaan, dan kesegaran ide-ide baru yang progresif dari para pengurus dan anggota.
                                </p>
                            </div>

                            {{-- Element 3 --}}
                            <div>
                                <h4 class="font-heading font-bold text-lg md:text-xl text-neutral-500 mb-2 flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-neutral-300 border border-neutral-400"></span>
                                    Warna Putih
                                </h4>
                                <p class="text-neutral-600 leading-relaxed pl-5">
                                    Melambangkan ketulusan dan kemurnian niat dalam menjalankan tugas serta pengabdian di dalam organisasi.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- ── Struktur Organisasi Section ── --}}
    <section id="struktur-organisasi" class="section-container relative py-24 md:py-32">
        <img src="{{ asset('assets/images/Struktur%20Himsi%202026.png') }}" alt="Bagan Struktur Organisasi HIMSI DPC Cikarang 2026" class="w-full max-w-7xl object-contain drop-shadow-sm rounded-xl">
    </section>

</main>
@endsection
