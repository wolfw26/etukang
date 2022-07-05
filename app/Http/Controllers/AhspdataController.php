<?php

namespace App\Http\Controllers;


use App\Models\AhspData;
use App\Models\Ahsp;
use App\Models\Material;
use Illuminate\Http\Request;

class AhspdataController extends Controller
{
    public function store(Request $request, $id)
    {

        if (isset($request['material']) && isset($request['koefisien'])) {
            $material = Material::find($request['material']);
            $request['nama_material'] = $material->nama_material;
            $request['volume'] = $request['koefisien'];
            $request['satuan'] = $material->satuan;
            $request['harga_satuan'] = $material->harga_satuan;
        }
        // $total = Ahs::find($id);
        // $upah  = $total->dataahs->where('kategori', 'upah');
        // dd($upah->sum('total'));
        // $id = $request['ahs'];
        $data = $request->all();
        $koefisien = number_format($data['volume'], 3);
        $total = $koefisien * $data['harga_satuan'];
        // dd($total);

        $ahs = new Ahspdata();

        $ahs->rincian = $data['nama_material'];
        $ahs->satuan = $data['satuan'];
        $ahs->volume = $koefisien;
        $ahs->harga_satuan = $data['harga_satuan'];
        $ahs->total = $total;
        $ahs->kategori = $data['jenis_proyek'];
        $ahs->ahsp_id = $id;
        $ahs->save();

        $total = Ahsp::find($id);

        // dd($total);
        $upah  = $total->dataahsp->where('kategori', 'upah');
        $bahan  = $total->dataahsp->where('kategori', 'bahan');
        $alat  = $total->dataahsp->where('kategori', 'alat');
        $jumlah  = $total->dataahsp;
        $total->total_upah = $upah->sum('total');
        $total->total_bahan = $bahan->sum('total');
        $total->total_alat = $alat->sum('total');
        $total->total = $jumlah->sum('total');
        $total->save();


        return redirect()->back()->with('sukses', 'Data Berhasil ');
    }
    public function delete($id)
    {
        $data = Ahspdata::find($id);
        $data->delete();
        return redirect()->back()->with('hapus', 'Data Berhasil Terhapus');
    }
}
