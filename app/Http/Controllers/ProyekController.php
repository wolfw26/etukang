<?php

namespace App\Http\Controllers;

use App\Models\DataProyek;
use App\Models\Proyek;
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
    public function show(DataProyek $dataproyek)
    {
        return view('admin.detailproyek', [
            'title' => 'Proyek',
            'data' => $dataproyek
        ]);
    }
}
