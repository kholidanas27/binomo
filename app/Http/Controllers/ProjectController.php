<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Project;
use App\Perusahaan;
use App\Pegawai;

class ProjectController extends Controller
{
    public function index()
    {
    	$project = Project::all();

    	return view('responsi.project', ['project' => $project]);
    }
}