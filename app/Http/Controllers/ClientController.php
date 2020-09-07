<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pegawai;
use App\perusahaan;
use App\projects;
use App\client;
use App\product;

class ClientController extends Controller
{
    public function client()
    {
        $product = product::paginate('8');

        return view('client.client', ['product' => $product]);
    }

}

