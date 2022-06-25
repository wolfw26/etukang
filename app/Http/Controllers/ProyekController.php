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
        return view('admin.detail.detailproyek', [
            'title' => 'Proyek',
            // 'nama' => $proyek->tukang->nama,
            'client' => $proyek->client,
            'data' =>  $proyek->dataproyek,
            'tukang' => $proyek->tukang,
            'proyek' => $proyek
        ]);
    }
    public function store()
    {
        return view('admin.proyek', [
            'title' => 'Proyek',
            'data' => Proyek::all()
        ]);
    }
    public function trash()
    {
        return view('admin.proyek', [
            'title' => 'Proyek',
            'data' => Proyek::all()
        ]);
    }
    public function update()
    {
        return view('admin.proyek', [
            'title' => 'Proyek',
            'data' => Proyek::all()
        ]);
    }
}
