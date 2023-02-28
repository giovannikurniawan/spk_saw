<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';
    protected $guarded = [];

    public function crips()
    {
        return $this->hasMany(Crips::class, 'kriteria_id');
    }
}
