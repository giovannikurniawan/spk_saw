<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kriteria;

class Semen extends Model
{
    protected $table = 'semen';

    // relasi dengan model kriteria
    public function kriteria()
    {
        return $this->hasMany(Kriteria::class);
    }
}
