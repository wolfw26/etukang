<?php

namespace App\Http\Controllers;

use App\Models\DataAhs;
use Illuminate\Http\Request;

class DataAhsController extends Controller
{
    public function store(Request $request, $id)
    {

        $data = $request->all();
        $total = ($request['volume'] + 00) * $request['harga_satuan'];

        $ahs = new DataAhs;

        $ahs->rincian = $data['nama_material'];
        $ahs->satuan = $data['satuan'];
        $ahs->volume = $data['volume'];
        $ahs->harga_satuan = $data['harga_satuan'];
        $ahs->total = $total;
        $ahs->kategori = $data['jenis_proyek'];
        $ahs->ahs_id = $id;
        $ahs->save();
        return redirect()->back()->with('sukses', 'Data Berhasil ');
    }
}
