<?php

namespace App\Http\Controllers;

use App\Models\Ahs;

use App\Models\Ahsp;
use App\Models\DataAhs;
use App\Models\ahspdata;
use App\Models\Material;
use Illuminate\Http\Request;

class AhspController extends Controller
{
    public function index()
    {

        return view('admin.ahsp', [
            'title' => 'AHS',
            'data' => Ahsp::latest()->Cari(request(['cari']))->paginate(20)->withQueryString()
        ]);
    }

    public function store(Request $request)
    {
        $data = new Ahsp;
        $data->kode_ahs = $request->kode_ahs;
        $data->nama_ahs = $request->nama_ahs;
        $data->satuan = $request->satuan;
        $data->kategori = $request->kategori;
        $data->profit = $request->profit;
        $data->save();

        return redirect()->back();
    }

    public function delete(Ahsp $id)
    {
        $data = Ahspdata::where('ahsp_id', $id->id);
        $status = $data->delete();
        $id->delete();
      
        if($status){
            request()->session()->flash('success','Aksi Berhasil Dilakukan');
        }
        else{
            request()->session()->flash('error','Maaf Aksi Gagal dilakukan Dilakukan');
        }
        return redirect()->back()->with('sukses', 'Data Berhasil Terhapus');
    }

    public function detail(Ahsp $ahsp)
    {
        return view('admin.detail.detailahsp', [
            'title' => 'Data AHS',
            'ahsp' => $ahsp,
            'data' => $ahsp->dataahsp,
            'bahan' => Material::all()

        ]);
    }
    public function edit(Request $request, Ahsp $id)
    {
        $id->kode_ahs = $request->kode;
        $id->nama_ahs = $request->nama;
        $id->kategori = $request->kategori;
        $id->satuan = $request->satuan;
        $upah  = $id->dataahsp->where('kategori', 'upah');
        $bahan  = $id->dataahsp->where('kategori', 'bahan');
        $alat  = $id->dataahsp->where('kategori', 'alat');
        $id->total_upah = $upah->sum('total');
        $id->total_bahan = $bahan->sum('total');
        $id->total_alat = $alat->sum('total');
        $id->total = $id->total_upah + $id->total_bahan + $id->total_alat;
        $jumlah = $id->total;
        $id->profit = $request->profit;
        $id->total = $request->profit / 100 * $jumlah;
    
        $status =   $id->save();
        if($status){
            request()->session()->flash('success','Aksi Berhasil Dilakukan');
        }
        else{
            request()->session()->flash('error','Maaf Aksi Gagal dilakukan Dilakukan');
        }
        return redirect()->back();
    }

    public function ahspdata(Request $request)
    {
        $data = $request->all();
        $koefisien = number_format($data['volume'], 3);
        $total = $koefisien * $data['harga_satuan'];

        $ahs = new AhspData;

        $ahs->rincian = $data['nama_material'];
        $ahs->satuan = $data['satuan'];
        $ahs->volume = $koefisien;
        $ahs->harga_satuan = $data['harga_satuan'];
        $ahs->total = $total;
        $ahs->kategori = $data['jenis_proyek'];
        $ahs->ahsp_id = $data['ahs'];
        $ahs->save();

        $total = Ahsp::find($data['ahs']);
        $upah  = $total->dataahsp->where('kategori', 'upah');
        $bahan  = $total->dataahsp->where('kategori', 'bahan');
        $alat  = $total->dataahsp->where('kategori', 'alat');
        $total->total_upah = $upah->sum('total');
        $total->total_bahan = $bahan->sum('total');
        $total->total_alat = $alat->sum('total');
        $total->total = $total->total_upah + $total->total_bahan + $total->total_alat;
      
        $status = $total->save();
        if($status){
            request()->session()->flash('success','Aksi Berhasil Dilakukan');
        }
        else{
            request()->session()->flash('error','Maaf Aksi Gagal dilakukan Dilakukan');
        }
   

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
