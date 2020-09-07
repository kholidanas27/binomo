<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $primaryKey = 'idProject';
    protected $table = "project";

    public function pegawai()
    {
    	# code...
    	return $this->hasMany('App\Pegawai','idPegawai','idPegawai');
    }

        public function perusahaan()
    {
    	# code...
    	return $this->hasMany('App\Perusahaan','idPerusahaan','idPerusahaan');
    }
}
