<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    //
    protected $table = "perusahaan";
    protected $PrimaryKey ="idPerusahaan";

    public function pegawai()
    {
    	# code...
    	return $this->hasMany('App\Pegawai','idPegawai','idPegawai');
    }
}
