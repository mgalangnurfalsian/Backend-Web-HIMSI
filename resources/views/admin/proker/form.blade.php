@extends('layouts.admin')

@section('title', isset($editMode) && $editMode ? 'Edit Program Kerja' : 'Tambah Program Kerja')
@section('page_title', isset($editMode) && $editMode ? 'Edit Program Kerja' : 'Tambah Program Kerja')
@section('page_subtitle', 'Isi formulir berikut untuk menyimpan data program kerja')

@section('admin_content')

    <div class="max-w-2xl">

        <a href="{{ route('admin.proker.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-neutral-500 hover:text-neutral-900 transition-colors mb-6">
            <i class="ph-bold ph-arrow-left"></i>
            Kembali ke Daftar Program Kerja
        </a>

        <form action="#" method="POST">
            @csrf
            @if(isset($editMode) && $editMode) @method('PUT') @endif

            <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6 md:p-8">
                <h2 class="font-heading font-bold text-neutral-900 mb-6">Detail Program Kerja</h2>

                <div class="flex flex-col gap-5">
                    <div>
                        <label for="nama_proker" class="block text-sm font-semibold text-neutral-700 mb-1.5">Nama Program Kerja <span class="text-danger">*</span></label>
                        <input type="text" id="nama_proker" name="nama_proker" placeholder="Contoh: Workshop UI/UX Design 2025"
                               class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                    </div>

                    <div>
                        <label for="deskripsi_proker" class="block text-sm font-semibold text-neutral-700 mb-1.5">Deskripsi</label>
                        <textarea id="deskripsi_proker" name="deskripsi" rows="4" placeholder="Jelaskan tujuan dan gambaran umum program kerja ini..."
                                  class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition resize-none"></textarea>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="divisi_proker" class="block text-sm font-semibold text-neutral-700 mb-1.5">Divisi Penanggung Jawab <span class="text-danger">*</span></label>
                            <select id="divisi_proker" name="divisi" class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                                <option value="">-- Pilih Divisi --</option>
                                <option value="bph">BPH</option>
                                <option value="kominfo">Kominfo</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="litbang">Litbang</option>
                                <option value="rsdm">RSDM</option>
                            </select>
                        </div>
                        <div>
                            <label for="status_proker" class="block text-sm font-semibold text-neutral-700 mb-1.5">Status <span class="text-danger">*</span></label>
                            <select id="status_proker" name="status" class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                                <option value="mendatang">Mendatang</option>
                                <option value="berjalan">Berjalan</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="target_tanggal" class="block text-sm font-semibold text-neutral-700 mb-1.5">Target Tanggal</label>
                            <input type="text" id="target_tanggal" name="target_tanggal" placeholder="Contoh: Agustus 2025"
                                   class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                        </div>
                        <div>
                            <label for="tahun_proker" class="block text-sm font-semibold text-neutral-700 mb-1.5">Tahun</label>
                            <input type="number" id="tahun_proker" name="tahun" value="{{ date('Y') }}"
                                   class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                        </div>
                    </div>
                </div>

                <div class="flex gap-3 mt-8 pt-6 border-t border-neutral-100">
                    <button type="submit" class="flex-1 inline-flex items-center justify-center gap-2 bg-primary-600 hover:bg-primary-700 text-white text-sm font-bold px-5 py-3 rounded-xl transition-colors shadow-md shadow-primary-200">
                        <i class="ph-bold ph-floppy-disk"></i>
                        Simpan Program Kerja
                    </button>
                    <a href="{{ route('admin.proker.index') }}" class="flex-1 inline-flex items-center justify-center gap-2 bg-neutral-100 hover:bg-neutral-200 text-neutral-700 text-sm font-bold px-5 py-3 rounded-xl transition-colors">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>

@endsection
