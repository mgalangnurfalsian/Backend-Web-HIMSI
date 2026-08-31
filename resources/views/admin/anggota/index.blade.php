@extends('layouts.admin')

@section('title', 'Manajemen Anggota & BPH')
@section('page_title', 'Manajemen Anggota & BPH')
@section('page_subtitle', 'Kelola seluruh data anggota pengurus HIMSI DPC Cikarang')

@section('admin_content')

    {{-- Filter & Action Bar --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
        <div class="flex items-center gap-3">
            <div class="relative">
                <i class="ph-bold ph-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-neutral-400"></i>
                <input type="search" placeholder="Cari anggota..." id="search-anggota"
                       class="pl-9 pr-4 py-2.5 bg-white border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 w-60 transition">
            </div>
            <select id="filter-divisi" class="px-4 py-2.5 bg-white border border-neutral-200 rounded-xl text-sm font-medium text-neutral-700 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                <option value="">Semua Divisi</option>
                <option value="bph">BPH</option>
                <option value="kominfo">Kominfo</option>
                <option value="pendidikan">Pendidikan</option>
                <option value="litbang">Litbang</option>
                <option value="rsdm">RSDM</option>
            </select>
        </div>
        <a href="{{ route('admin.anggota.create') }}"
           class="inline-flex items-center gap-2 bg-primary-600 hover:bg-primary-700 text-white text-sm font-bold px-5 py-2.5 rounded-xl transition-colors shadow-md shadow-primary-200">
            <i class="ph-bold ph-user-plus"></i>
            Tambah Anggota
        </a>
    </div>

    {{-- Table --}}
    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-neutral-50 text-neutral-500 text-xs uppercase tracking-wider border-b border-neutral-100">
                        <th class="text-left px-6 py-3.5 font-semibold">Anggota</th>
                        <th class="text-left px-6 py-3.5 font-semibold">Jabatan</th>
                        <th class="text-left px-6 py-3.5 font-semibold">Divisi</th>
                        <th class="text-left px-6 py-3.5 font-semibold">Nama Panggilan</th>
                        <th class="text-center px-6 py-3.5 font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-50">
                    @php
                        $anggota = [
                            ['id' => 1, 'nama' => 'Fahri Akbar Indratama', 'panggilan' => 'Fahri', 'jabatan' => 'Ketua', 'divisi' => 'BPH', 'img' => 'fahri.webp'],
                            ['id' => 2, 'nama' => 'Putri Salma Nurhasanah', 'panggilan' => 'Salma', 'jabatan' => 'Wakil Ketua', 'divisi' => 'BPH', 'img' => 'salma.webp'],
                            ['id' => 3, 'nama' => 'Shania Nur Wulansari', 'panggilan' => 'Shania', 'jabatan' => 'Sekretaris 1', 'divisi' => 'BPH', 'img' => 'shania.webp'],
                            ['id' => 4, 'nama' => 'Zalfa Abyrnada', 'panggilan' => 'Nada', 'jabatan' => 'Sekretaris 2', 'divisi' => 'BPH', 'img' => 'nada.webp'],
                            ['id' => 5, 'nama' => 'Diva Rahma Novitasari', 'panggilan' => 'Diva', 'jabatan' => 'Bendahara 1', 'divisi' => 'BPH', 'img' => 'diva.webp'],
                            ['id' => 6, 'nama' => 'Novia Endah Darmastuti', 'panggilan' => 'Novia', 'jabatan' => 'Bendahara 2', 'divisi' => 'BPH', 'img' => 'novia.webp'],
                            ['id' => 7, 'nama' => 'Ahmad Maulana Zuhdi', 'panggilan' => 'Aldi', 'jabatan' => 'Koordinator', 'divisi' => 'Kominfo', 'img' => 'aldi.webp'],
                            ['id' => 8, 'nama' => 'Luthfia Chandra Putri Narendra', 'panggilan' => 'Luthfia', 'jabatan' => 'Anggota', 'divisi' => 'Kominfo', 'img' => 'luthfia.webp'],
                            ['id' => 9, 'nama' => 'Defa Raihan Agis', 'panggilan' => 'Defa', 'jabatan' => 'Anggota', 'divisi' => 'Kominfo', 'img' => 'defa.webp'],
                            ['id' => 10, 'nama' => 'Dzulfiqar Dumaid', 'panggilan' => 'Dumaid', 'jabatan' => 'Koordinator', 'divisi' => 'RSDM', 'img' => 'dumaid.webp'],
                        ];
                        $divisiColors = ['BPH' => 'bg-primary-100 text-primary-700', 'Kominfo' => 'bg-accent-100 text-accent-700', 'Pendidikan' => 'bg-info-light text-info', 'Litbang' => 'bg-success-light text-success', 'RSDM' => 'bg-warning-light text-warning'];
                    @endphp

                    @foreach($anggota as $member)
                    <tr class="hover:bg-neutral-50/80 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full overflow-hidden bg-neutral-100 shrink-0">
                                    <img src="{{ asset('assets/images/personil/' . $member['img']) }}" alt="{{ $member['nama'] }}" class="w-full h-full object-cover">
                                </div>
                                <span class="font-semibold text-neutral-900">{{ $member['nama'] }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-neutral-600 font-medium">{{ $member['jabatan'] }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-2.5 py-1 rounded-full text-xs font-bold {{ $divisiColors[$member['divisi']] ?? 'bg-neutral-100 text-neutral-600' }}">{{ $member['divisi'] }}</span>
                        </td>
                        <td class="px-6 py-4 text-neutral-500">{{ $member['panggilan'] }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.anggota.edit', $member['id']) }}"
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

        <div class="px-6 py-4 border-t border-neutral-100 flex items-center justify-between text-sm">
            <p class="text-neutral-500">Menampilkan <span class="font-semibold text-neutral-800">10</span> dari <span class="font-semibold text-neutral-800">18</span> anggota</p>
            <div class="flex gap-1">
                <button class="w-8 h-8 rounded-lg border border-neutral-200 text-neutral-500 hover:bg-neutral-100 transition-colors flex items-center justify-center">
                    <i class="ph-bold ph-caret-left text-sm"></i>
                </button>
                <button class="w-8 h-8 rounded-lg bg-primary-600 text-white font-bold text-xs flex items-center justify-center">1</button>
                <button class="w-8 h-8 rounded-lg border border-neutral-200 text-neutral-500 hover:bg-neutral-100 text-xs flex items-center justify-center">2</button>
                <button class="w-8 h-8 rounded-lg border border-neutral-200 text-neutral-500 hover:bg-neutral-100 transition-colors flex items-center justify-center">
                    <i class="ph-bold ph-caret-right text-sm"></i>
                </button>
            </div>
        </div>
    </div>

@endsection
