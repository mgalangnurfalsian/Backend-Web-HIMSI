<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi';

    protected $fillable = [
        'nama_divisi',
        'deskripsi',
        'gambar',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'divisi_id');
    }

    public function kegiatan(): HasMany
    {
        return $this->hasMany(Kegiatan::class, 'divisi_id');
    }

    public function proker(): HasMany
    {
        return $this->hasMany(Proker::class, 'divisi_id');
    }
}