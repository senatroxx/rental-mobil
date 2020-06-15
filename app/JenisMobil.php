<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisMobil extends Model
{
    protected $table = 'jenis_mobil';

    protected $fillable = ['nama_jenis', 'created_at', 'updated_at'];
    
    public function mobil()
    {
        return $this->belongsTo('App\Mobil');
    }
}
