<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "product";
    protected $PrimaryKey ="idProduct";

    // public function perusahaan()
    // {
    // 	# code...
    // 	return $this->hasMany('App\Perusahaan','idPerusahaan','idPerusahaan');
    // }
}
