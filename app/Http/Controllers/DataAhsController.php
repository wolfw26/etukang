<?php

namespace App\Http\Controllers;

use App\Models\Ahs;
use App\Models\DataAhs;
use Illuminate\Http\Request;

class DataAhsController extends Controller
{
    public function store(Request $request, $id)
    {
        // $total = Ahs::find($id);
        // $upah  = $total->dataahs->where('kategori', 'upah');
        // dd($upah->sum('total'));

        $data = $request->all();
        $koefisien = number_format($data['volume'], 3);
        $total = $koefisien * $data['harga_satuan'];
        // dd($total);

        $ahs = new DataAhs;

        $ahs->rincian = $data['nama_material'];
        $ahs->satuan = $data['satuan'];
        $ahs->volume = $koefisien;
        $ahs->harga_satuan = $data['harga_satuan'];
        $ahs->total = $total;
        $ahs->kategori = $data['jenis_proyek'];
        $ahs->ahs_id = $id;
        $ahs->save();

        $total = Ahs::find($id);
        $upah  = $total->dataahs->where('kategori', 'upah');
        $bahan  = $total->dataahs->where('kategori', 'bahan');
        $alat  = $total->dataahs->where('kategori', 'alat');
        $total->total_upah = $upah->sum('total');
        $total->total_bahan = $bahan->sum('total');
        $total->total_alat = $alat->sum('total');
        $total->total = $total->total_upah + $total->total_bahan + $total->total_alat;
        $total->save();


        return redirect()->back()->with('sukses', 'Data Berhasil ');
    }
    public function delete($id)
    {
        $data = DataAhs::find($id);
        $data->delete();
        return redirect()->back()->with('hapus', 'Data Berhasil Terhapus');
    }
}
