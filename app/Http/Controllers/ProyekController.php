<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Tukang;
use App\Models\DataProyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function index()
    {
        return view('admin.proyek', [
            'title' => 'Proyek',
            'data' => Proyek::all()
        ]);
    }
    public function show(Proyek $proyek)
    {
        return view('admin.detailproyek', [
            'title' => 'Proyek',
            // 'nama' => $proyek->tukang->nama,
            'data' =>  $proyek->dataproyek,
            'tukang' => $proyek->tukang->nama
        ]);
    }
}
