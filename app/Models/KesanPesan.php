<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KesanPesan extends Model
{
    use HasFactory;

    protected $table = 'kesan_pesan';

    protected $fillable = [
        'user_id',
        'kesan_pesan',
        'tahun',
    ];

    protected function casts(): array
    {
        return [
            'tahun' => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}