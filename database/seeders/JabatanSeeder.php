<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama_jabatan' => 'ketua',        'deskripsi' => 'Ketua organisasi'],
            ['nama_jabatan' => 'wakil_ketua',  'deskripsi' => 'Wakil ketua'],
            ['nama_jabatan' => 'sekretaris',   'deskripsi' => 'Sekretaris'],
            ['nama_jabatan' => 'bendahara',    'deskripsi' => 'Bendahara'],
            ['nama_jabatan' => 'koordinator',  'deskripsi' => 'Koordinator divisi'],
            ['nama_jabatan' => 'anggota',      'deskripsi' => 'Anggota'],
        ];

        foreach ($data as $d) {
            Jabatan::updateOrCreate(
                ['nama_jabatan' => $d['nama_jabatan']],
                $d
            );
        }
    }
}