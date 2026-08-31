@extends('layouts.admin')

@section('title', 'Program Kerja')
@section('page_title', 'Program Kerja')
@section('page_subtitle', 'Kelola dan pantau progress program kerja semua divisi')

@section('admin_content')

    {{-- Filter & Action Bar --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
        <div class="flex items-center gap-3 flex-wrap">
            <select id="filter-divisi-proker" class="px-4 py-2.5 bg-white border border-neutral-200 rounded-xl text-sm font-medium text-neutral-700 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                <option value="">Semua Divisi</option>
                <option value="bph">BPH</option>
                <option value="kominfo">Kominfo</option>
                <option value="pendidikan">Pendidikan</option>
                <option value="litbang">Litbang</option>
                <option value="rsdm">RSDM</option>
            </select>
            <select id="filter-status-proker" class="px-4 py-2.5 bg-white border border-neutral-200 rounded-xl text-sm font-medium text-neutral-700 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                <option value="">Semua Status</option>
                <option value="selesai">Selesai</option>
                <option value="berjalan">Berjalan</option>
                <option value="mendatang">Mendatang</option>
            </select>
        </div>
        <a href="{{ route('admin.proker.create') }}"
           class="inline-flex items-center gap-2 bg-primary-600 hover:bg-primary-700 text-white text-sm font-bold px-5 py-2.5 rounded-xl transition-colors shadow-md shadow-primary-200">
            <i class="ph-bold ph-plus"></i>
            Tambah Proker
        </a>
    </div>

    {{-- Summary Cards by Divisi --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        @php
            $divisiSummary = [
                ['nama' => 'Kominfo', 'selesai' => 3, 'total' => 4, 'color' => 'accent'],
                ['nama' => 'Pendidikan', 'selesai' => 4, 'total' => 5, 'color' => 'info'],
                ['nama' => 'Litbang', 'selesai' => 2, 'total' => 4, 'color' => 'success'],
                ['nama' => 'RSDM', 'selesai' => 3, 'total' => 3, 'color' => 'primary'],
            ];
        @endphp
        @foreach($divisiSummary as $ds)
        @php $pct = round(($ds['selesai'] / $ds['total']) * 100); @endphp
        <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-5 hover:shadow-md transition-shadow">
            <p class="text-xs font-bold text-neutral-500 uppercase tracking-wider mb-3">{{ $ds['nama'] }}</p>
            <p class="text-2xl font-heading font-black text-neutral-900 mb-3">{{ $pct }}%</p>
            <div class="h-2 bg-neutral-100 rounded-full overflow-hidden">
                <div class="h-full bg-{{ $ds['color'] }}-500 rounded-full" style="width: {{ $pct }}%"></div>
            </div>
            <p class="text-xs text-neutral-400 mt-2">{{ $ds['selesai'] }}/{{ $ds['total'] }} selesai</p>
        </div>
        @endforeach
    </div>

    {{-- Table --}}
    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-neutral-50 text-neutral-500 text-xs uppercase tracking-wider border-b border-neutral-100">
                        <th class="text-left px-6 py-3.5 font-semibold">Program Kerja</th>
                        <th class="text-left px-6 py-3.5 font-semibold">Divisi</th>
                        <th class="text-left px-6 py-3.5 font-semibold">Target Tanggal</th>
                        <th class="text-left px-6 py-3.5 font-semibold">Status</th>
                        <th class="text-center px-6 py-3.5 font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-50">
                    @php
                        $proker = [
                            ['id' => 1, 'nama' => 'Pengelolaan Instagram HIMSI', 'divisi' => 'Kominfo', 'target' => 'Sepanjang Tahun 2025', 'status' => 'berjalan'],
                            ['id' => 2, 'nama' => 'Pembuatan Website Resmi HIMSI', 'divisi' => 'Kominfo', 'target' => 'Agustus 2025', 'status' => 'berjalan'],
                            ['id' => 3, 'nama' => 'Workshop UI/UX Design', 'divisi' => 'Pendidikan', 'target' => 'Agustus 2025', 'status' => 'selesai'],
                            ['id' => 4, 'nama' => 'Kelompok Studi Mahasiswa (KSM)', 'divisi' => 'Pendidikan', 'target' => 'Sepanjang 2025', 'status' => 'berjalan'],
                            ['id' => 5, 'nama' => 'Seminar Nasional Teknologi', 'divisi' => 'Litbang', 'target' => 'September 2025', 'status' => 'mendatang'],
                            ['id' => 6, 'nama' => 'Riset Inovasi Mahasiswa', 'divisi' => 'Litbang', 'target' => 'Oktober 2025', 'status' => 'mendatang'],
                            ['id' => 7, 'nama' => 'Open Recruitment Pengurus', 'divisi' => 'RSDM', 'target' => 'September 2025', 'status' => 'berjalan'],
                            ['id' => 8, 'nama' => 'Malam Keakraban (Makrab)', 'divisi' => 'RSDM', 'target' => 'Agustus 2025', 'status' => 'selesai'],
                            ['id' => 9, 'nama' => 'LDKM (Latihan Dasar Kepemimpinan)', 'divisi' => 'RSDM', 'target' => 'Juli 2025', 'status' => 'selesai'],
                        ];
                        $divisiColors = ['Kominfo' => 'bg-accent-100 text-accent-700', 'Pendidikan' => 'bg-info-light text-info', 'Litbang' => 'bg-success-light text-success', 'RSDM' => 'bg-warning-light text-warning', 'BPH' => 'bg-primary-100 text-primary-700'];
                    @endphp
                    @foreach($proker as $item)
                    <tr class="hover:bg-neutral-50/80 transition-colors">
                        <td class="px-6 py-4 font-semibold text-neutral-900">{{ $item['nama'] }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-2.5 py-1 rounded-full text-xs font-bold {{ $divisiColors[$item['divisi']] ?? 'bg-neutral-100 text-neutral-600' }}">{{ $item['divisi'] }}</span>
                        </td>
                        <td class="px-6 py-4 text-neutral-500">{{ $item['target'] }}</td>
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
                                <a href="{{ route('admin.proker.edit', $item['id']) }}"
                                   class="w-8 h-8 rounded-lg bg-primary-50 hover:bg-primary-100 text-primary-600 flex items-center justify-center transition-colors">
                                    <i class="ph-bold ph-pencil-simple text-base"></i>
                                </a>
                                <button type="button"
                                   class="w-8 h-8 rounded-lg bg-danger-light hover:bg-red-100 text-danger flex items-center justify-center transition-colors">
                                    <i class="ph-bold ph-trash text-base"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
