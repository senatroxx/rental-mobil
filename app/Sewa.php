<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    protected $table = 'sewa';

    protected $fillable = ['user_id', 'tgl_sewa', 'tgl_selesai', 'mobil_id', 'total', 'acc', 'done', 'jml_sewa'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function mobil()
    {
        return $this->belongsTo('App\Mobil');
    }
}
