<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = 'alternatif';
    protected $guarded = [];

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'alternatif_id');
    }
}
