<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Project;
use App\Perusahaan;
use App\Pegawai;

class Pegawai extends Model
{
    //
    protected $table = "pegawai";
    protected $PrimaryKey ="idPegawai";

    public function perusahaan()
    {
    	# code...
    	return $this->hasMany('App\Perusahaan','idPerusahaan','idPerusahaan');
    }
}
