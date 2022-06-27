<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MaterialController extends Controller
{
    public function index()
    {

        return view('admin.material', [
            'title' => 'Data Material',
            'data' => Material::all(),
            'proyek' => Proyek::all()
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_material' => 'required|string',
            'satuan' => 'required',
            'harga_satuan' => 'required|integer',
            'jumlah' => 'required|integer',
            'jumlah_harga' => 'required|integer',
            'proyek_id' => 'required|integer'
        ]);

        $data = $request->all();

        Material::create($data);
        return redirect()->back()->with('tambah', 'Berhasil Ditambah');
    }
}
