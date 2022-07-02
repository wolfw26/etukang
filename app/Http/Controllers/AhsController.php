<?php

namespace App\Http\Controllers;

use App\Models\Ahs;
use App\Models\DataAhs;
use Illuminate\Http\Request;

class AhsController extends Controller
{
    public function index()
    {
        return view('admin.ahs', [
            'title' => 'AHS',
            'data' => Ahs::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Ahs::class::create($data);
        return redirect()->route('ahs');
    }

    public function delete($id)
    {
        $data = Ahs::find($id);
        $data->delete();
        return redirect()->back()->with('sukses', 'Data Berhasil Terhapus');
    }

    public function detail(Ahs $ahs)
    {
        return view('admin.detail.detailahs', [
            'title' => 'Data AHS',
            'ahs' => $ahs,
            'data' => $ahs->dataahs

        ]);
    }

    public function dataahs(Request $request)
    {

        $data = $request->all();
        $koefisien = number_format($data['volume'], 3);
        $total = $koefisien * $data['harga_satuan'];

        $ahs = new DataAhs;

        $ahs->rincian = $data['nama_material'];
        $ahs->satuan = $data['satuan'];
        $ahs->volume = $koefisien;
        $ahs->harga_satuan = $data['harga_satuan'];
        $ahs->total = $total;
        $ahs->kategori = $data['jenis_proyek'];
        $ahs->ahs_id = $data['ahs'];
        $ahs->save();

        $total = Ahs::find($data['ahs']);
        $upah  = $total->dataahs->where('kategori', 'upah');
        $bahan  = $total->dataahs->where('kategori', 'bahan');
        $alat  = $total->dataahs->where('kategori', 'alat');
        $total->total_upah = $upah->sum('total');
        $total->total_bahan = $bahan->sum('total');
        $total->total_alat = $alat->sum('total');
        $total->total = $total->total_upah + $total->total_bahan + $total->total_alat;
        $total->save();


        return redirect()->back()->with('sukses', "Data Berhasil ditambah ke  $total->kode_ahs " );
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
