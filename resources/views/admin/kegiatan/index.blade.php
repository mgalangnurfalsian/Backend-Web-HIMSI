@extends('layouts.admin')

@section('title', 'Manajemen Kegiatan')
@section('page_title', 'Manajemen Kegiatan')
@section('page_subtitle', 'Kelola semua data kegiatan dan acara HIMSI DPC Cikarang')

@section('admin_content')

    {{-- Header Bar --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
        <div class="relative">
            <i class="ph-bold ph-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-neutral-400"></i>
            <input type="search" placeholder="Cari kegiatan..." id="search-kegiatan"
                   class="pl-9 pr-4 py-2.5 bg-white border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 w-72 transition">
        </div>
        <a href="{{ route('admin.kegiatan.create') }}"
           class="inline-flex items-center gap-2 bg-primary-600 hover:bg-primary-700 text-white text-sm font-bold px-5 py-2.5 rounded-xl transition-colors shadow-md shadow-primary-200">
            <i class="ph-bold ph-plus"></i>
            Tambah Kegiatan
        </a>
    </div>

    {{-- Table --}}
    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-neutral-50 text-neutral-500 text-xs uppercase tracking-wider border-b border-neutral-100">
                        <th class="text-left px-6 py-3.5 font-semibold">Kegiatan</th>
                        <th class="text-left px-6 py-3.5 font-semibold">Divisi</th>
                        <th class="text-left px-6 py-3.5 font-semibold">Tanggal</th>
                        <th class="text-left px-6 py-3.5 font-semibold">Status</th>
                        <th class="text-center px-6 py-3.5 font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-50">
                    @php
                        $kegiatan = [
                            ['id' => 1, 'nama' => 'Workshop UI/UX Design 2025', 'divisi' => 'Pendidikan', 'tanggal' => '12 Agustus 2025', 'status' => 'selesai', 'img' => 'kegiatan1.webp'],
                            ['id' => 2, 'nama' => 'Makrab HIMSI 2025', 'divisi' => 'RSDM', 'tanggal' => '3 Agustus 2025', 'status' => 'selesai', 'img' => 'kegiatan2.webp'],
                            ['id' => 3, 'nama' => 'Open Recruitment 2025', 'divisi' => 'RSDM', 'tanggal' => '10 September 2025', 'status' => 'berjalan', 'img' => 'kegiatan3.webp'],
                            ['id' => 4, 'nama' => 'Seminar Nasional Teknologi', 'divisi' => 'Litbang', 'tanggal' => '25 September 2025', 'status' => 'mendatang', 'img' => 'kegiatan4.webp'],
                            ['id' => 5, 'nama' => 'Pelatihan Web Development', 'divisi' => 'Kominfo', 'tanggal' => '28 Juli 2025', 'status' => 'selesai', 'img' => 'kegiatan5.webp'],
                            ['id' => 6, 'nama' => 'Lomba Karya Ilmiah (LKTI)', 'divisi' => 'Litbang', 'tanggal' => '5 Oktober 2025', 'status' => 'mendatang', 'img' => 'kegiatan6.webp'],
                            ['id' => 7, 'nama' => 'Bakti Sosial HIMSI', 'divisi' => 'RSDM', 'tanggal' => '15 Juni 2025', 'status' => 'selesai', 'img' => 'kegiatan7.webp'],
                        ];
                    @endphp

                    @foreach($kegiatan as $item)
                    <tr class="hover:bg-neutral-50/80 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-neutral-100 overflow-hidden shrink-0">
                                    <img src="{{ asset('assets/images/' . $item['img']) }}" alt="{{ $item['nama'] }}" class="w-full h-full object-cover" onerror="this.style.display='none'">
                                </div>
                                <span class="font-semibold text-neutral-900">{{ $item['nama'] }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-neutral-500">{{ $item['divisi'] }}</td>
                        <td class="px-6 py-4 text-neutral-500">{{ $item['tanggal'] }}</td>
                        <td class="px-6 py-4">
                            @if($item['status'] === 'selesai')
                                <span class="inline-block px-2.5 py-1 rounded-full text-xs font-bold bg-success-light text-success">Selesai</span>
                            @elseif($item['status'] === 'berjalan')
                                <span class="inline-block px-2.5 py-1 rounded-full text-xs font-bold bg-warning-light text-warning">Berjalan</span>
                            @else
                                <span class="inline-block px-2.5 py-1 rounded-full text-xs font-bold bg-info-light text-info">Mendatang</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.kegiatan.edit', $item['id']) }}"
                                   class="w-8 h-8 rounded-lg bg-primary-50 hover:bg-primary-100 text-primary-600 flex items-center justify-center transition-colors" title="Edit">
                                    <i class="ph-bold ph-pencil-simple text-base"></i>
                                </a>
                                <button type="button"
                                   class="w-8 h-8 rounded-lg bg-danger-light hover:bg-red-100 text-danger flex items-center justify-center transition-colors" title="Hapus">
                                    <i class="ph-bold ph-trash text-base"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="px-6 py-4 border-t border-neutral-100 flex items-center justify-between text-sm">
            <p class="text-neutral-500">Menampilkan <span class="font-semibold text-neutral-800">7</span> dari <span class="font-semibold text-neutral-800">24</span> kegiatan</p>
            <div class="flex gap-1">
                <button class="w-8 h-8 rounded-lg border border-neutral-200 text-neutral-500 hover:bg-neutral-100 transition-colors flex items-center justify-center">
                    <i class="ph-bold ph-caret-left text-sm"></i>
                </button>
                <button class="w-8 h-8 rounded-lg bg-primary-600 text-white font-bold transition-colors flex items-center justify-center text-xs">1</button>
                <button class="w-8 h-8 rounded-lg border border-neutral-200 text-neutral-500 hover:bg-neutral-100 transition-colors flex items-center justify-center text-xs">2</button>
                <button class="w-8 h-8 rounded-lg border border-neutral-200 text-neutral-500 hover:bg-neutral-100 transition-colors flex items-center justify-center text-xs">3</button>
                <button class="w-8 h-8 rounded-lg border border-neutral-200 text-neutral-500 hover:bg-neutral-100 transition-colors flex items-center justify-center">
                    <i class="ph-bold ph-caret-right text-sm"></i>
                </button>
            </div>
        </div>
    </div>

@endsection
