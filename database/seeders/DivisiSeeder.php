<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama_divisi' => 'BPH', 'deskripsi' => 'Badan Pengurus Harian'],
            ['nama_divisi' => 'Litbang', 'deskripsi' => 'Penelitian dan Pengembangan'],
            ['nama_divisi' => 'RSDM', 'deskripsi' => 'Rekrutmen Sumber Daya Manusia'],
            ['nama_divisi' => 'Kominfo', 'deskripsi' => 'Komunikasi dan Informasi'],
            ['nama_divisi' => 'Pendidikan', 'deskripsi' => 'Pendidikan'],
        ];

        foreach ($data as $d) {
            Divisi::updateOrCreate(['nama_divisi' => $d['nama_divisi']], $d);
        }
    }
}