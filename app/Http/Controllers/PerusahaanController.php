<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerusahaanController extends Controller
{
    public function index()
    {
    	$perusahaan = DB::table('perusahaan')->get();

    	return view('responsi.perusahaan', ['perusahaan' => $perusahaan]);
    }

}