<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaian';
    protected $guarded =[];

    public function crips()
    {
        return $this->belongsTo(Crips::class, 'crips_id');
    }
}
