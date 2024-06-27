<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Diagnosa extends Model
{
    use HasFactory;

    protected $table = 'diagnosa';

    protected $with = ['hasil'];

    public function hasil(): HasMany
    {
        return $this->hasMany(Result::class, 'diagnosa_id');
    }
}
