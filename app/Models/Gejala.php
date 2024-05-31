<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';

    protected $fillable = [
        'nama',
    ];

    public function penyakit(): BelongsToMany
    {
        return $this->belongsToMany(Penyakit::class, 'gejala_penyakit');
    }
}
