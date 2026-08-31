@extends('layouts.admin')

@section('title', isset($editMode) && $editMode ? 'Edit Anggota' : 'Tambah Anggota')
@section('page_title', isset($editMode) && $editMode ? 'Edit Anggota' : 'Tambah Anggota')
@section('page_subtitle', 'Isi formulir berikut untuk menyimpan data anggota/pengurus')

@section('admin_content')

    <div class="max-w-3xl">

        <a href="{{ route('admin.anggota.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-neutral-500 hover:text-neutral-900 transition-colors mb-6">
            <i class="ph-bold ph-arrow-left"></i>
            Kembali ke Daftar Anggota
        </a>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($editMode) && $editMode) @method('PUT') @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                {{-- Foto Upload --}}
                <div class="flex flex-col gap-5">
                    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6">
                        <h2 class="font-heading font-bold text-neutral-900 mb-5">Foto Profil</h2>
                        <label for="foto" class="flex flex-col items-center justify-center w-full aspect-[3/4] border-2 border-dashed border-neutral-200 rounded-2xl cursor-pointer hover:border-primary-400 hover:bg-primary-50/30 transition-all group">
                            <i class="ph-bold ph-user-circle text-4xl text-neutral-300 mb-2 group-hover:text-primary-400 transition-colors"></i>
                            <p class="text-xs font-semibold text-neutral-500">Upload Foto 3:4</p>
                            <p class="text-[10px] text-neutral-400 text-center px-4 mt-1">PNG, JPG, WebP (maks. 2MB)</p>
                            <input type="file" id="foto" name="foto" class="hidden" accept="image/*">
                        </label>
                        <p class="text-xs text-neutral-400 mt-2 text-center">Disarankan rasio 3:4 (portrait)</p>
                    </div>
                </div>

                {{-- Main Data --}}
                <div class="md:col-span-2 flex flex-col gap-5">
                    <div class="bg-white rounded-2xl border border-neutral-100 shadow-sm p-6">
                        <h2 class="font-heading font-bold text-neutral-900 mb-5">Data Anggota</h2>
                        <div class="flex flex-col gap-4">
                            <div>
                                <label for="nama_lengkap" class="block text-sm font-semibold text-neutral-700 mb-1.5">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Contoh: Ahmad Maulana Zuhdi"
                                       class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                            </div>

                            <div>
                                <label for="nama_panggilan" class="block text-sm font-semibold text-neutral-700 mb-1.5">Nama Panggilan <span class="text-danger">*</span></label>
                                <input type="text" id="nama_panggilan" name="nama_panggilan" placeholder="Contoh: Aldi"
                                       class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="divisi" class="block text-sm font-semibold text-neutral-700 mb-1.5">Divisi <span class="text-danger">*</span></label>
                                    <select id="divisi" name="divisi" class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                                        <option value="">-- Pilih Divisi --</option>
                                        <option value="bph">BPH</option>
                                        <option value="kominfo">Kominfo</option>
                                        <option value="pendidikan">Pendidikan</option>
                                        <option value="litbang">Litbang</option>
                                        <option value="rsdm">RSDM</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="jabatan" class="block text-sm font-semibold text-neutral-700 mb-1.5">Jabatan <span class="text-danger">*</span></label>
                                    <select id="jabatan" name="jabatan" class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                                        <option value="">-- Pilih Jabatan --</option>
                                        <optgroup label="BPH">
                                            <option value="ketua">Ketua</option>
                                            <option value="wakil_ketua">Wakil Ketua</option>
                                            <option value="sekretaris_1">Sekretaris 1</option>
                                            <option value="sekretaris_2">Sekretaris 2</option>
                                            <option value="bendahara_1">Bendahara 1</option>
                                            <option value="bendahara_2">Bendahara 2</option>
                                        </optgroup>
                                        <optgroup label="Divisi">
                                            <option value="koordinator">Koordinator Divisi</option>
                                            <option value="anggota">Anggota</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="npm" class="block text-sm font-semibold text-neutral-700 mb-1.5">NPM</label>
                                <input type="text" id="npm" name="npm" placeholder="Contoh: 12123456"
                                       class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                            </div>

                            <div>
                                <label for="angkatan" class="block text-sm font-semibold text-neutral-700 mb-1.5">Angkatan</label>
                                <input type="text" id="angkatan" name="angkatan" placeholder="Contoh: 2022"
                                       class="w-full px-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-xl text-sm font-medium text-neutral-900 placeholder-neutral-400 focus:outline-none focus:border-primary-400 focus:ring-2 focus:ring-primary-100 transition">
                            </div>
                        </div>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex gap-3">
                        <button type="submit" class="flex-1 inline-flex items-center justify-center gap-2 bg-primary-600 hover:bg-primary-700 text-white text-sm font-bold px-5 py-3 rounded-xl transition-colors shadow-md shadow-primary-200">
                            <i class="ph-bold ph-floppy-disk"></i>
                            Simpan
                        </button>
                        <a href="{{ route('admin.anggota.index') }}" class="flex-1 inline-flex items-center justify-center gap-2 bg-neutral-100 hover:bg-neutral-200 text-neutral-700 text-sm font-bold px-5 py-3 rounded-xl transition-colors">
                            Batal
                        </a>
                    </div>
                </div>

            </div>
        </form>
    </div>

@endsection
