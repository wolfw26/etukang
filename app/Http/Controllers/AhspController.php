<?php

namespace App\Http\Controllers;

use App\Models\Ahs;
use App\Models\ahsp;
use App\Models\ahspdata;
use App\Models\DataAhs;
use Illuminate\Http\Request;

class AhspController extends Controller
{
    public function index()
    {
        return view('admin.ahsp', [
            'title' => 'AHS',
            'data' => ahsp::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        ahsp::class::create($data);
        return redirect()->route('ahsp');
    }

    public function delete($id)
    {
        $data = ahsp::find($id);
        $data->delete();
        return redirect()->back()->with('sukses', 'Data Berhasil Terhapus');
    }

    public function detail(ahsp $ahsp)
    {
        return view('admin.detail.detailahsp', [
            'title' => 'Data AHS',
            'ahsp' => $ahsp,
            'data' => $ahsp->ahspdata

        ]);
    }

    public function ahspdata(Request $request)
    {

        $data = $request->all();
        $koefisien = number_format($data['volume'], 3);
        $total = $koefisien * $data['harga_satuan'];

        $ahs = new ahspdata;

        $ahs->rincian = $data['nama_material'];
        $ahs->satuan = $data['satuan'];
        $ahs->volume = $koefisien;
        $ahs->harga_satuan = $data['harga_satuan'];
        $ahs->total = $total;
        $ahs->kategori = $data['jenis_proyek'];
        $ahs->ahsp_id = $data['ahs'];
        $ahs->save();

        $total = ahsp::find($data['ahs']);
        $upah  = $total->ahspdata->where('kategori', 'upah');
        $bahan  = $total->ahspdata->where('kategori', 'bahan');
        $alat  = $total->ahspdata->where('kategori', 'alat');
        $total->total_upah = $upah->sum('total');
        $total->total_bahan = $bahan->sum('total');
        $total->total_alat = $alat->sum('total');
        $total->total = $total->total_upah + $total->total_bahan + $total->total_alat;
        $total->save();


        return redirect()->back()->with('sukses', "Data Berhasil ditambah ke  $total->kode_ahs ");
        // $data = $request->all();
        // $total = ($request['volume'] + 00) * $request['harga_satuan'];

        // $ahs = new DataAhs;

        // $ahs->rincian = $data['nama_material'];
        // $ahs->satuan = $data['satuan'];
        // $ahs->volume = $data['volume'];
        // $ahs->harga_satuan = $data['harga_satuan'];
        // $ahs->total = $total;
        // $ahs->kategori = $data['jenis_proyek'];
        // $ahs->ahs_id = $data['ahs'];
        // $ahs->save();
        // return redirect()->back()->with('sukses', 'Data Berhasil ');
    }
}
