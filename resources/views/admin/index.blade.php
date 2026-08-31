@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('page_subtitle', 'Selamat datang kembali, Administrator')

@section('admin_content')

@php
    $hour = now()->format('H');
    $greeting = $hour < 12 ? 'Selamat Pagi' : ($hour < 17 ? 'Selamat Siang' : 'Selamat Malam');
@endphp

{{-- ═══════════════════════════════════════════════════════════
     WELCOME BANNER
     ═══════════════════════════════════════════════════════════ --}}
<div class="bg-gradient-to-r from-primary-600 to-primary-800 rounded-3xl p-6 md:p-8 mb-8 relative overflow-hidden shadow-xl shadow-primary-200/50">
    {{-- Background decoration --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-10 -right-10 w-48 h-48 bg-white/5 rounded-full"></div>
        <div class="absolute bottom-0 right-24 w-32 h-32 bg-accent-500/10 rounded-full blur-2xl"></div>
        <div class="absolute top-4 right-4 opacity-10">
            <i class="ph-fill ph-squares-four text-8xl text-white"></i>
        </div>
    </div>

    <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <p class="text-primary-200 text-sm font-semibold mb-1">{{ $greeting }}, 👋</p>
            <h2 class="font-heading font-black text-white text-2xl md:text-3xl mb-2">Administrator HIMSI</h2>
            <p class="text-primary-200 text-sm">
                Hari ini {{ now()->translatedFormat('l, d F Y') }} — Semua sistem berjalan normal.
            </p>
        </div>
        <div class="flex flex-col sm:flex-row gap-3 shrink-0">
            <a href="{{ route('admin.kegiatan.create') }}"
               class="inline-flex items-center gap-2 bg-white text-primary-700 text-sm font-bold px-5 py-2.5 rounded-xl hover:bg-primary-50 transition-colors shadow-lg shadow-primary-900/20">
                <i class="ph-bold ph-plus"></i>
                Tambah Kegiatan
            </a>
            <a href="/" target="_blank"
               class="inline-flex items-center gap-2 bg-primary-500/40 text-white text-sm font-bold px-5 py-2.5 rounded-xl hover:bg-primary-500/60 transition-colors border border-primary-400/40">
                <i class="ph-bold ph-arrow-square-out"></i>
                Lihat Website
            </a>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════
     KPI STATS ROW
     ═══════════════════════════════════════════════════════════ --}}
<div class="grid grid-cols-2 xl:grid-cols-4 gap-5 mb-8">

    {{-- Kegiatan --}}
    <div class="bg-white rounded-2xl p-5 md:p-6 border border-neutral-100 shadow-sm hover:shadow-md transition-all duration-200 group">
        <div class="flex items-start justify-between mb-4">
            <div class="w-11 h-11 rounded-2xl bg-primary-50 flex items-center justify-center group-hover:bg-primary-100 transition-colors">
                <i class="ph-fill ph-calendar-check text-xl text-primary-600"></i>
            </div>
            <span class="inline-flex items-center gap-1 text-xs font-bold text-success bg-success-light px-2 py-1 rounded-full">
                <i class="ph-fill ph-trend-up text-sm"></i> +3
            </span>
        </div>
        <p class="text-3xl font-heading font-black text-neutral-900 mb-1">24</p>
        <p class="text-sm text-neutral-500 font-medium">Total Kegiatan</p>
        <div class="mt-3 pt-3 border-t border-neutral-50">
            <p class="text-xs text-neutral-400">3 kegiatan mendatang</p>
        </div>
    </div>

    {{-- Anggota --}}
    <div class="bg-white rounded-2xl p-5 md:p-6 border border-neutral-100 shadow-sm hover:shadow-md transition-all duration-200 group">
        <div class="flex items-start justify-between mb-4">
            <div class="w-11 h-11 rounded-2xl bg-accent-50 flex items-center justify-center group-hover:bg-accent-100 transition-colors">
                <i class="ph-fill ph-users-three text-xl text-accent-600"></i>
            </div>
            <span class="inline-flex items-center gap-1 text-xs font-bold text-neutral-500 bg-neutral-100 px-2 py-1 rounded-full">
                Stabil
            </span>
        </div>
        <p class="text-3xl font-heading font-black text-neutral-900 mb-1">18</p>
        <p class="text-sm text-neutral-500 font-medium">Total Anggota</p>
        <div class="mt-3 pt-3 border-t border-neutral-50">
            <p class="text-xs text-neutral-400">6 BPH · 12 Divisi</p>
        </div>
    </div>

    {{-- Program Kerja --}}
    <div class="bg-white rounded-2xl p-5 md:p-6 border border-neutral-100 shadow-sm hover:shadow-md transition-all duration-200 group">
        <div class="flex items-start justify-between mb-4">
            <div class="w-11 h-11 rounded-2xl bg-info-light flex items-center justify-center group-hover:bg-blue-100 transition-colors">
                <i class="ph-fill ph-clipboard-text text-xl text-info"></i>
            </div>
            <span class="inline-flex items-center gap-1 text-xs font-bold text-warning bg-warning-light px-2 py-1 rounded-full">
                4 Berjalan
            </span>
        </div>
        <p class="text-3xl font-heading font-black text-neutral-900 mb-1">16</p>
        <p class="text-sm text-neutral-500 font-medium">Program Kerja</p>
        <div class="mt-3 pt-3 border-t border-neutral-50">
            <p class="text-xs text-neutral-400">75% selesai tahun ini</p>
        </div>
    </div>

    {{-- Halaman Terlihat --}}
    <div class="bg-white rounded-2xl p-5 md:p-6 border border-neutral-100 shadow-sm hover:shadow-md transition-all duration-200 group">
        <div class="flex items-start justify-between mb-4">
            <div class="w-11 h-11 rounded-2xl bg-success-light flex items-center justify-center group-hover:bg-green-100 transition-colors">
                <i class="ph-fill ph-eye text-xl text-success"></i>
            </div>
            <span class="inline-flex items-center gap-1 text-xs font-bold text-success bg-success-light px-2 py-1 rounded-full">
                <i class="ph-fill ph-trend-up text-sm"></i> +12%
            </span>
        </div>
        <p class="text-3xl font-heading font-black text-neutral-900 mb-1">1.2K</p>
        <p class="text-sm text-neutral-500 font-medium">Pengunjung Bulan Ini</p>
        <div class="mt-3 pt-3 border-t border-neutral-50">
            <p class="text-xs text-neutral-400">vs. 1.07K bulan lalu</p>
        </div>
    </div>

</div>

{{-- ═══════════════════════════════════════════════════════════
     MAIN CONTENT GRID
     ═══════════════════════════════════════════════════════════ --}}
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-6">

    {{-- Recent Kegiatan Table (2/3) --}}
    <div class="xl:col-span-2 bg-white rounded-2xl border border-neutral-100 shadow-sm overflow-hidden">
        <div class="flex items-center justify-between px-6 py-4 border-b border-neutral-100">
            <div>
                <h2 class="font-heading font-bold text-neutral-900 text-base">Kegiatan Terbaru</h2>
                <p class="text-xs text-neutral-400 mt-0.5">Aktivitas dan acara yang terakhir ditambahkan</p>
            </div>
            <a href="{{ route('admin.kegiatan.index') }}" class="text-xs font-bold text-primary-600 hover:text-primary-700 flex items-center gap-1 bg-primary-50 hover:bg-primary-100 px-3 py-1.5 rounded-lg transition-colors">
                Lihat Semua <i class="ph-bold ph-arrow-right"></i>
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-neutral-50 text-neutral-400 text-[11px] uppercase tracking-wider">
                        <th class="text-left px-6 py-3 font-semibold">Kegiatan</th>
                        <th class="text-left px-6 py-3 font-semibold hidden md:table-cell">Divisi</th>
                        <th class="text-left px-6 py-3 font-semibold hidden sm:table-cell">Tanggal</th>
                        <th class="text-left px-6 py-3 font-semibold">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-50">
                    @php
                        $recentKegiatan = [
                            ['nama' => 'Workshop UI/UX Design 2025', 'divisi' => 'Pendidikan', 'tanggal' => '12 Agt 2025', 'status' => 'selesai'],
                            ['nama' => 'Makrab HIMSI 2025', 'divisi' => 'RSDM', 'tanggal' => '3 Agt 2025', 'status' => 'selesai'],
                            ['nama' => 'Open Recruitment 2025', 'divisi' => 'RSDM', 'tanggal' => '10 Sep 2025', 'status' => 'berjalan'],
                            ['nama' => 'Seminar Nasional Teknologi', 'divisi' => 'Litbang', 'tanggal' => '25 Sep 2025', 'status' => 'mendatang'],
                            ['nama' => 'Pelatihan Web Development', 'divisi' => 'Kominfo', 'tanggal' => '28 Jul 2025', 'status' => 'selesai'],
                        ];
                    @endphp
                    @foreach($recentKegiatan as $k)
                    <tr class="hover:bg-neutral-50/80 transition-colors">
                        <td class="px-6 py-3.5 font-semibold text-neutral-800">{{ $k['nama'] }}</td>
                        <td class="px-6 py-3.5 text-neutral-500 hidden md:table-cell">{{ $k['divisi'] }}</td>
                        <td class="px-6 py-3.5 text-neutral-500 text-xs hidden sm:table-cell">{{ $k['tanggal'] }}</td>
                        <td class="px-6 py-3.5">
                            @if($k['status'] === 'selesai')
                                <span class="inline-block px-2 py-0.5 rounded-full text-[11px] font-bold bg-success-light text-success">Selesai</span>
                            @elseif($k['status'] === 'berjalan')
                                <span class="inline-block px-2 py-0.5 rounded-full text-[11px] font-bold bg-warning-light text-warning">Berjalan</span>
                            @else
                                <span class="inline-block px-2 py-0.5 rounded-full text-[11px] font-bold bg-info-light text-info">Mendatang</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Upcoming Events (1/3) --}}
    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-neutral-100">
            <h2 class="font-heading font-bold text-neutral-900 text-base">Kegiatan Mendatang</h2>
            <p class="text-xs text-neutral-400 mt-0.5">Jadwal yang perlu dipersiapkan</p>
        </div>
        <div class="divide-y divide-neutral-50">
            @php
                $upcoming = [
                    ['nama' => 'Seminar Nasional Teknologi', 'tanggal' => '25 Sep', 'divisi' => 'Litbang', 'hari' => 26],
                    ['nama' => 'Open Recruitment 2025', 'tanggal' => '10 Sep', 'divisi' => 'RSDM', 'hari' => 11],
                    ['nama' => 'Lomba Karya Ilmiah (LKTI)', 'tanggal' => '5 Okt', 'divisi' => 'Litbang', 'hari' => 36],
                ];
                $divisiAccent = ['Litbang' => 'success', 'RSDM' => 'warning', 'Kominfo' => 'accent', 'Pendidikan' => 'info'];
            @endphp
            @foreach($upcoming as $u)
            <div class="flex items-start gap-4 px-6 py-4 hover:bg-neutral-50 transition-colors">
                <div class="w-10 h-10 rounded-xl bg-primary-50 flex flex-col items-center justify-center shrink-0 text-center">
                    <span class="text-lg font-black text-primary-700 leading-none">{{ explode(' ', $u['tanggal'])[0] }}</span>
                    <span class="text-[9px] font-bold text-primary-400 leading-none mt-0.5">{{ explode(' ', $u['tanggal'])[1] }}</span>
                </div>
                <div class="min-w-0">
                    <p class="text-sm font-semibold text-neutral-800 leading-tight truncate">{{ $u['nama'] }}</p>
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-xs text-neutral-400">{{ $u['divisi'] }}</span>
                        <span class="text-[10px] font-bold text-{{ $divisiAccent[$u['divisi']] ?? 'primary' }}-600 bg-{{ $divisiAccent[$u['divisi']] ?? 'primary' }}-50 px-1.5 py-0.5 rounded">{{ $u['hari'] }} hari lagi</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>

{{-- ═══════════════════════════════════════════════════════════
     SECOND ROW
     ═══════════════════════════════════════════════════════════ --}}
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-6">

    {{-- Proker Progress --}}
    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6">
        <div class="flex items-center justify-between mb-5">
            <div>
                <h2 class="font-heading font-bold text-neutral-900 text-base">Progress Proker</h2>
                <p class="text-xs text-neutral-400 mt-0.5">Realisasi per divisi</p>
            </div>
            <a href="{{ route('admin.proker.index') }}" class="text-xs font-bold text-primary-600 hover:underline">Detail</a>
        </div>
        <div class="flex flex-col gap-4">
            @php
                $prokerProgress = [
                    ['divisi' => 'RSDM', 'selesai' => 3, 'total' => 3, 'color' => 'primary'],
                    ['divisi' => 'Pendidikan', 'selesai' => 4, 'total' => 5, 'color' => 'info'],
                    ['divisi' => 'Kominfo', 'selesai' => 3, 'total' => 4, 'color' => 'accent'],
                    ['divisi' => 'Litbang', 'selesai' => 2, 'total' => 4, 'color' => 'success'],
                ];
            @endphp
            @foreach($prokerProgress as $p)
            @php $pct = round(($p['selesai'] / $p['total']) * 100); @endphp
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 rounded-full bg-{{ $p['color'] }}-500"></div>
                        <span class="text-xs font-semibold text-neutral-700">{{ $p['divisi'] }}</span>
                    </div>
                    <span class="text-xs font-bold text-neutral-600">{{ $pct }}%</span>
                </div>
                <div class="h-2 bg-neutral-100 rounded-full overflow-hidden">
                    <div class="h-full bg-{{ $p['color'] }}-500 rounded-full" style="width: {{ $pct }}%"></div>
                </div>
                <p class="text-[11px] text-neutral-400 mt-1">{{ $p['selesai'] }} dari {{ $p['total'] }} selesai</p>
            </div>
            @endforeach
        </div>

        {{-- Overall --}}
        <div class="mt-5 pt-5 border-t border-neutral-100">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold text-neutral-600">Total Keseluruhan</span>
                <span class="text-sm font-black text-primary-600">75%</span>
            </div>
            <div class="mt-2 h-3 bg-neutral-100 rounded-full overflow-hidden">
                <div class="h-full bg-gradient-to-r from-primary-500 to-primary-400 rounded-full" style="width: 75%"></div>
            </div>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6">
        <div class="mb-5">
            <h2 class="font-heading font-bold text-neutral-900 text-base">Aksi Cepat</h2>
            <p class="text-xs text-neutral-400 mt-0.5">Shortcut untuk tugas yang sering dilakukan</p>
        </div>
        <div class="grid grid-cols-2 gap-3">
            <a href="{{ route('admin.kegiatan.create') }}"
               class="flex flex-col items-center gap-2 p-4 rounded-xl bg-primary-50 hover:bg-primary-100 text-primary-700 font-semibold text-xs transition-colors text-center group">
                <div class="w-10 h-10 rounded-xl bg-primary-100 group-hover:bg-primary-200 flex items-center justify-center transition-colors">
                    <i class="ph-bold ph-calendar-plus text-xl text-primary-600"></i>
                </div>
                Tambah Kegiatan
            </a>
            <a href="{{ route('admin.anggota.create') }}"
               class="flex flex-col items-center gap-2 p-4 rounded-xl bg-accent-50 hover:bg-accent-100 text-accent-700 font-semibold text-xs transition-colors text-center group">
                <div class="w-10 h-10 rounded-xl bg-accent-100 group-hover:bg-accent-200 flex items-center justify-center transition-colors">
                    <i class="ph-bold ph-user-plus text-xl text-accent-600"></i>
                </div>
                Tambah Anggota
            </a>
            <a href="{{ route('admin.proker.create') }}"
               class="flex flex-col items-center gap-2 p-4 rounded-xl bg-info-light hover:bg-blue-100 text-info font-semibold text-xs transition-colors text-center group">
                <div class="w-10 h-10 rounded-xl bg-blue-100 group-hover:bg-blue-200 flex items-center justify-center transition-colors">
                    <i class="ph-bold ph-clipboard-text text-xl text-info"></i>
                </div>
                Tambah Proker
            </a>
            <a href="{{ route('admin.anggota.index') }}"
               class="flex flex-col items-center gap-2 p-4 rounded-xl bg-success-light hover:bg-green-100 text-success font-semibold text-xs transition-colors text-center group">
                <div class="w-10 h-10 rounded-xl bg-green-100 group-hover:bg-green-200 flex items-center justify-center transition-colors">
                    <i class="ph-bold ph-users text-xl text-success"></i>
                </div>
                Kelola Anggota
            </a>
        </div>
    </div>

    {{-- Activity Log --}}
    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6">
        <div class="mb-5">
            <h2 class="font-heading font-bold text-neutral-900 text-base">Log Aktivitas</h2>
            <p class="text-xs text-neutral-400 mt-0.5">Rekam jejak aksi terakhir di CMS</p>
        </div>
        <div class="flex flex-col gap-0">
            @php
                $logs = [
                    ['action' => 'Kegiatan baru ditambahkan', 'detail' => '"Workshop UI/UX Design"', 'time' => '2 jam lalu', 'icon' => 'ph-calendar-plus', 'color' => 'primary'],
                    ['action' => 'Anggota diperbarui', 'detail' => 'Data "Fahri Akbar" diedit', 'time' => '5 jam lalu', 'icon' => 'ph-pencil-simple', 'color' => 'warning'],
                    ['action' => 'Proker selesai ditandai', 'detail' => '"Makrab HIMSI 2025"', 'time' => '1 hari lalu', 'icon' => 'ph-check-circle', 'color' => 'success'],
                    ['action' => 'Anggota baru ditambahkan', 'detail' => '"Defa Raihan Agis"', 'time' => '2 hari lalu', 'icon' => 'ph-user-plus', 'color' => 'info'],
                    ['action' => 'Kegiatan dihapus', 'detail' => '"Event placeholder lama"', 'time' => '3 hari lalu', 'icon' => 'ph-trash', 'color' => 'danger'],
                ];
            @endphp
            @foreach($logs as $i => $log)
            <div class="flex gap-3 {{ $i < count($logs) - 1 ? 'pb-4 mb-4 border-b border-neutral-50' : '' }}">
                <div class="relative shrink-0">
                    <div class="w-8 h-8 rounded-full bg-{{ $log['color'] }}-50 flex items-center justify-center">
                        <i class="ph-bold {{ $log['icon'] }} text-sm text-{{ $log['color'] }}-500"></i>
                    </div>
                    @if($i < count($logs) - 1)
                    <div class="absolute left-1/2 -translate-x-1/2 top-8 w-px h-4 bg-neutral-100"></div>
                    @endif
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-xs font-semibold text-neutral-800 leading-tight">{{ $log['action'] }}</p>
                    <p class="text-[11px] text-neutral-400 truncate mt-0.5">{{ $log['detail'] }}</p>
                    <p class="text-[10px] text-neutral-300 mt-1">{{ $log['time'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>

{{-- ═══════════════════════════════════════════════════════════
     STATUS WEBSITE — SYSTEM HEALTH
     ═══════════════════════════════════════════════════════════ --}}
<div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6">
    <div class="flex items-center justify-between mb-5">
        <div>
            <h2 class="font-heading font-bold text-neutral-900 text-base">Status Halaman Website</h2>
            <p class="text-xs text-neutral-400 mt-0.5">Daftar halaman publik yang dapat diakses pengunjung</p>
        </div>
        <span class="inline-flex items-center gap-1.5 text-xs font-bold text-success bg-success-light px-3 py-1.5 rounded-full">
            <span class="w-1.5 h-1.5 rounded-full bg-success animate-pulse"></span>
            Semua Online
        </span>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4">
        @php
            $pages = [
                ['label' => 'Beranda', 'url' => '/', 'icon' => 'ph-house', 'status' => 'online'],
                ['label' => 'Sejarah', 'url' => '/sejarah', 'icon' => 'ph-book-open', 'status' => 'online'],
                ['label' => 'BPH', 'url' => '/bph', 'icon' => 'ph-crown', 'status' => 'online'],
                ['label' => 'Divisi', 'url' => '/divisi', 'icon' => 'ph-layout', 'status' => 'online'],
                ['label' => 'Kegiatan', 'url' => '/kegiatan', 'icon' => 'ph-calendar-check', 'status' => 'online'],
                ['label' => 'Login Admin', 'url' => '/adm/1/login', 'icon' => 'ph-lock', 'status' => 'online'],
            ];
        @endphp
        @foreach($pages as $page)
        <a href="{{ $page['url'] }}" target="_blank"
           class="flex flex-col items-center gap-2 p-4 rounded-xl border border-neutral-100 hover:border-success hover:bg-success-light/30 transition-all text-center group">
            <div class="relative">
                <div class="w-10 h-10 rounded-xl bg-neutral-100 group-hover:bg-success-light flex items-center justify-center transition-colors">
                    <i class="ph-bold {{ $page['icon'] }} text-xl text-neutral-500 group-hover:text-success transition-colors"></i>
                </div>
                <span class="absolute -top-0.5 -right-0.5 w-3 h-3 bg-success rounded-full border-2 border-white"></span>
            </div>
            <span class="text-xs font-semibold text-neutral-600 group-hover:text-success transition-colors">{{ $page['label'] }}</span>
        </a>
        @endforeach
    </div>
</div>

@endsection
