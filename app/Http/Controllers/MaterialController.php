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
            'data' => Material::latest()->paginate(10),
            'proyek' => Proyek::all()
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_material' => 'required|string',
            'satuan' => 'required',
            'harga_satuan' => 'required|integer',
        ]);

        $data = $request->all();
        $material = new Material;

        $material->nama_material = $data['nama_material'];
        $material->satuan = $data['satuan'];
        $material->harga_satuan = $data['harga_satuan'];
        $material->save();

        return redirect()->back()->with('tambah', 'Berhasil Ditambah');
    }
    public function delete($id)
    {
        $data = Material::find($id);
        $data->delete();
        return redirect()->back()->with('sukses', 'Data Berhasil Terhapus');
    }
}
