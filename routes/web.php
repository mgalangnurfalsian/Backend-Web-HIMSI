<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ui-showcase', function () {
    return view('ui-showcase');
});

Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

Route::get('/divisi', function () {
    return view('divisi');
})->name('divisi');

Route::get('/bph', function () {
    return view('bph');
})->name('bph');

Route::get('/kegiatan', function () {
    return view('kegiatan.index');
})->name('kegiatan.index');

Route::get('/kegiatan/{slug}', function ($slug) {
    // In a real app, you would fetch data from the database using the slug.
    // Here we just pass the slug to the dummy view.
    return view('kegiatan.show', ['slug' => $slug]);
})->name('kegiatan.show');

Route::get('/adm/1/login', function () {
    return view('auth.login');
})->name('login');

// ── Admin Routes ──────────────────────────────────────────────
Route::prefix('adm/1')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', fn() => view('admin.index'))->name('dashboard');

    // Kegiatan
    Route::get('/kegiatan',            fn() => view('admin.kegiatan.index'))->name('kegiatan.index');
    Route::get('/kegiatan/create',     fn() => view('admin.kegiatan.form'))->name('kegiatan.create');
    Route::get('/kegiatan/{id}/edit',  fn($id) => view('admin.kegiatan.form', ['editMode' => true, 'id' => $id]))->name('kegiatan.edit');

    // Anggota & BPH
    Route::get('/anggota',             fn() => view('admin.anggota.index'))->name('anggota.index');
    Route::get('/anggota/create',      fn() => view('admin.anggota.form'))->name('anggota.create');
    Route::get('/anggota/{id}/edit',   fn($id) => view('admin.anggota.form', ['editMode' => true, 'id' => $id]))->name('anggota.edit');

    // Program Kerja
    Route::get('/proker',              fn() => view('admin.proker.index'))->name('proker.index');
    Route::get('/proker/create',       fn() => view('admin.proker.form'))->name('proker.create');
    Route::get('/proker/{id}/edit',    fn($id) => view('admin.proker.form', ['editMode' => true, 'id' => $id]))->name('proker.edit');

});
