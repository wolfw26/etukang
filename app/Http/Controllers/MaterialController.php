<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Material;
use App\Models\Material_in;
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
            'kode_material' => 'required',
            'nama_material' => 'required|string',
            'satuan' => 'required',
            'harga_satuan' => 'required|integer',
        ]);

        $data = $request->all();
        $material = new Material;

        $material->kode_material = $data['kode_material'];
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

    public function cetakMaterial()
    {
        return view('admin.cetak.cetakmaterial', [
            'title' => 'Material || Cetak All',
            'data' => Material::all()
        ]);
    }
    public function Materialin($param)
    {
        // $data = Material_in::latest()->where('material_id', 'like', '%' . $param . '%')
        //     ->orWhere('tanggal', 'like', '%' . $param . '%')->get()->dd();

        return view('admin.cetak.materialin', [
            'title' => 'Material || Cetak All',
            'data' => Material_in::latest()->where('material_id', 'like', '%' . $param . '%')
                ->orWhere('tanggal', 'like', '%' . $param . '%')->get()
        ]);
    }
}
