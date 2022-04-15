<?php

namespace App\Http\Controllers;

use App\Models\DataPegawai;
use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{

    public function index()
    {
        $alldatapegawai = DataPegawai::all();
        $pegawai = DataPegawai::first();
        // return $pegawai;
        return view('home', compact('alldatapegawai'));
    }
}
