<?php

namespace Database\Seeders;

use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil ID berdasarkan nama — jangan hardcode ID
        $ketua = Jabatan::where('nama_jabatan', 'ketua')->first();
        $bph   = Divisi::where('nama_divisi', 'BPH')->first();

        User::updateOrCreate(
            ['nim' => '12345678'],
            [
                'nama_lengkap'   => 'Admin Test',
                'nama_panggilan' => 'Admin',
                'angkatan'       => '2023-01-01', // sesuaikan dgn tipe kolom
                'password'       => 'password123', // auto-hash via cast di model
                'jabatan_id'     => $ketua?->id,
                'divisi_id'      => $bph?->id,
            ]
        );
    }
}