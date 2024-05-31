<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'penyakit';

    protected $fillable = [
        'nama',
        'keterangan',
    ];

    public function gejala(): BelongsToMany
    {
        return $this->belongsToMany(Gejala::class, 'gejala_penyakit');
    }
}
