<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('divisi_id')->constrained('divisi')->onDelete('cascade');
            $table->string('judul_kegiatan');
            $table->string('slug')->unique();
            $table->date('tanggal_kegiatan');
            $table->string('lokasi')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->text('deskripsi_singkat')->nullable();
            $table->string('gambar')->nullable();
            $table->text('konten_lengkap')->nullable();
            $table->enum('status',['selesai', 'berjalan', 'mendatang']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};