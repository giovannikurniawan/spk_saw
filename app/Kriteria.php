<?php

namespace App;
use App\Semen;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';
    
    protected $guarded = [];

    public function crips()
    {
        return $this->hasMany(Crips::class, 'kriteria_id');
    }

    // relasi dengan model semen
    public function semen()
    {
        return $this->hasMany(Semen::class);
    }
}
