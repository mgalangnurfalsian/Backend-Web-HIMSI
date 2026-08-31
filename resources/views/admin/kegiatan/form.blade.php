@extends('layouts.admin')

@section('title', isset($editMode) && $editMode ? 'Edit Kegiatan' : 'Tambah Kegiatan')
@section('page_title', isset($editMode) && $editMode ? 'Edit Kegiatan' : 'Tambah Kegiatan')
@section('page_subtitle', 'Isi formulir berikut untuk menyimpan data kegiatan')

@section('admin_content')

    <div class="max-w-4xl">

        {{-- Back Link --}}
        <a href="{{ route('admin.kegiatan.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-neutral-500 hover:text-neutral-900 transition-colors mb-6">
            <i class="ph-bold ph-arrow-left"></i>
            Kembali ke Daftar Kegiatan
        </a>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($editMode) && $editMode) @method('PUT') @endif

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                {{-- Main Form --}}
                <div class="lg:col-span-2 flex flex-col gap-5">
                    
                    {{-- Judul --}}
                    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6">
                        <h2 class="font-heading font-bold text-neutral-900 mb-5">Informasi Utama</h2>
                        <div class="flex flex-col gap-4">
                            <div>
                                <label for="judul" class="block text-sm font-semibold text-neutral-700 mb-1.5">Judul Kegiatan <span class="text-danger">*</span></label>
                                <input type="text" id="judul" name="judul" placeholder="Contoh: Workshop UI/UX Design 2025"
                                       class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                            </div>

                            <div>
                                <label for="slug" class="block text-sm font-semibold text-neutral-700 mb-1.5">Slug (URL) <span class="text-danger">*</span></label>
                                <div class="flex">
                                    <span class="inline-flex items-center px-3 rounded-l-xl border border-r-0 border-neutral-200 bg-neutral-100 text-neutral-400 text-xs font-medium">/kegiatan/</span>
                                    <input type="text" id="slug" name="slug" placeholder="workshop-uiux-design-2025"
                                           class="flex-1 px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-r-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                                </div>
                            </div>

                            <div>
                                <label for="deskripsi" class="block text-sm font-semibold text-neutral-700 mb-1.5">Deskripsi Singkat</label>
                                <textarea id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi singkat yang akan ditampilkan di halaman listing kegiatan..."
                                          class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition resize-none"></textarea>
                            </div>

                            <div>
                                <label for="konten" class="block text-sm font-semibold text-neutral-700 mb-1.5">Konten Lengkap <span class="text-danger">*</span></label>
                                <textarea id="konten" name="konten" rows="10" placeholder="Tulis konten lengkap kegiatan di sini..."
                                          class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition resize-y"></textarea>
                                <p class="text-xs text-neutral-400 mt-1.5">Mendukung Markdown dan HTML dasar.</p>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Sidebar Options --}}
                <div class="flex flex-col gap-5">

                    {{-- Publish --}}
                    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6">
                        <h2 class="font-heading font-bold text-neutral-900 mb-5">Publikasi</h2>
                        <div class="flex flex-col gap-4">
                            <div>
                                <label for="status" class="block text-sm font-semibold text-neutral-700 mb-1.5">Status</label>
                                <select id="status" name="status" class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                                    <option value="mendatang">Mendatang</option>
                                    <option value="berjalan">Berjalan</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>
                            <div>
                                <label for="tanggal" class="block text-sm font-semibold text-neutral-700 mb-1.5">Tanggal Kegiatan <span class="text-danger">*</span></label>
                                <input type="date" id="tanggal" name="tanggal"
                                       class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                            </div>
                            <div>
                                <label for="tahun" class="block text-sm font-semibold text-neutral-700 mb-1.5">Tahun</label>
                                <input type="number" id="tahun" name="tahun" placeholder="{{ date('Y') }}" value="{{ date('Y') }}"
                                       class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                            </div>
                        </div>
                    </div>

                    {{-- Divisi --}}
                    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6">
                        <h2 class="font-heading font-bold text-neutral-900 mb-5">Kategori</h2>
                        <div>
                            <label for="divisi" class="block text-sm font-semibold text-neutral-700 mb-1.5">Divisi Penyelenggara</label>
                            <select id="divisi" name="divisi" class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                                <option value="">-- Pilih Divisi --</option>
                                <option value="bph">BPH</option>
                                <option value="kominfo">Kominfo</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="litbang">Litbang</option>
                                <option value="rsdm">RSDM</option>
                            </select>
                        </div>
                    </div>

                    {{-- Foto Thumbnail --}}
                    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6">
                        <h2 class="font-heading font-bold text-neutral-900 mb-5">Foto Sampul</h2>
                        <label for="foto_sampul" class="flex flex-col items-center justify-center w-full h-36 border-2 border-dashed border-neutral-200 rounded-xl cursor-pointer hover:border-primary-400 hover:bg-primary-50/30 transition-all">
                            <i class="ph-bold ph-image-square text-3xl text-neutral-300 mb-2"></i>
                            <p class="text-xs font-semibold text-neutral-500">Klik untuk upload</p>
                            <p class="text-[10px] text-neutral-400">PNG, JPG, WebP (maks. 2MB)</p>
                            <input type="file" id="foto_sampul" name="foto_sampul" class="hidden" accept="image/*">
                        </label>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex gap-3">
                        <button type="submit" class="flex-1 inline-flex items-center justify-center gap-2 bg-primary-600 hover:bg-primary-700 text-white text-sm font-bold px-5 py-3 rounded-xl transition-colors shadow-md shadow-primary-200">
                            <i class="ph-bold ph-floppy-disk"></i>
                            Simpan
                        </button>
                        <a href="{{ route('admin.kegiatan.index') }}" class="flex-1 inline-flex items-center justify-center gap-2 bg-neutral-100 hover:bg-neutral-200 text-neutral-700 text-sm font-bold px-5 py-3 rounded-xl transition-colors">
                            Batal
                        </a>
                    </div>

                </div>

            </div>
        </form>
    </div>

@endsection
