<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';

    protected $fillable = ['nama', 'jenis_id', 'no_polisi', 'transmisi', 'tahun', 'biaya', 'gambar'];

    public $timestamps = false;
    
    public function sewa()
    {
        return $this->hasMany('App\Sewa');
    }

    public function jenisMobil()
    {
        return $this->hasMany('App\JenisMobil');
    }
}
