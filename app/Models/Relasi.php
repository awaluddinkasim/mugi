<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Relasi extends Model
{
    use HasFactory;

    protected $table = 'gejala_penyakit';

    protected $fillable = [
        'gejala_id',
        'penyakit_id'
    ];

    public function gejala(): BelongsTo
    {
        return $this->belongsTo(Gejala::class);
    }
}
