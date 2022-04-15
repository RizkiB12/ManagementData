<?php

namespace App\Http\Controllers;

use App\Models\DataPegawai;
use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{

    public function indexPPK()
    {
        $alldatapegawai = DataPegawai::where('category', 'PPK')->get();
        return view('home', compact('alldatapegawai'));
    }

    public function indexKPPS()
    {
        $alldatapegawai = DataPegawai::where('category', 'KPPS')->get();
        return view('home', compact('alldatapegawai'));
    }

    public function indexPPS()
    {
        $alldatapegawai = DataPegawai::where('category', 'PPS')->get();
        return view('home', compact('alldatapegawai'));
    }
}
