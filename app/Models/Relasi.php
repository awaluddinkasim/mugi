<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    use HasFactory;

    protected $table = 'gejala_penyakit';

    protected $fillable = [
        'id_gejala',
        'id_penyakit'
    ];
}
