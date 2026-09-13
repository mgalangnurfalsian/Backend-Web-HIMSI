<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proker extends Model
{
    use HasFactory;

    protected $table = 'proker';

    protected $fillable = [
        'divisi_id',
        'nama_proker',
        'deskripsi',
        'status',
        'target_tanggal',
        'tahun',
        'gambar',
    ];

    protected function casts(): array
    {
        return [
            'target_tanggal' => 'date',
            'tahun' => 'date',
        ];
    }

    public function divisi(): BelongsTo
    {
        return $this->belongsTo(Divisi::class, 'divisi_id');
    }
}