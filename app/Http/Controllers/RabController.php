<?php

namespace App\Http\Controllers;

use App\Models\Rab;
use App\Models\Ahsp;
use App\Models\Proyek;
use App\Models\DataRab;
use Illuminate\Http\Request;

class RabController extends Controller
{
    public function total($data)
    {
        $rab = Rab::find($data);
        $datarab = DataRab::where('rab_id', $rab->id)->get();
        $rab->nama_rab = $rab->nama_rab;
        $rab->jumlah = $datarab->sum('total');
        $rab->save();
        return redirect()->back();
    }
    public function index()
    {
        // foreach (Rab::all() as $data) {
        //     foreach (Proyek::where('id', $data['proyek_id']) as $proyek) {
        //         return $proyek;
        //     }
        // }
        // dd($rab);
        $rab = Rab::all();
        return view('admin.rab', [
            'title' => 'RAB',
            'data' => $rab,
            'proyek' => Proyek::all()
        ]);
    }

    public function konfirmasi(Rab $id)
    {

        $id->status = 'selesai';
        $id->save();
        return redirect()->route('rab.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $rab = new Rab;
        $proyek = Proyek::find($data['proyek_id']);
        $rab->nama_rab = $data['nama_rab'];
        $rab->kode_rab = $data['kode_rab'];
        $rab->tanggal_mulai = $proyek->tanggal_mulai;
        $rab->tangal_selesai = $proyek->tanggal_selesai;
        $rab->proyek_id = $data['proyek_id'];
        $status = $rab->save();

        if ($status) {
            request()->session()->flash('success', 'Aksi Berhasil Dilakukan');
        } else {
            request()->session()->flash('error', 'Maaf Aksi Gagal dilakukan Dilakukan');
        }

        return redirect()->route('rab.index');
    }

    public function delete($rab)
    {

        $data = Rab::find($rab);
        $status =  $data->delete();
        if ($status) {
            request()->session()->flash('success', 'Aksi Berhasil Dilakukan');
        } else {
            request()->session()->flash('error', 'Maaf Aksi Gagal dilakukan Dilakukan');
        }
        return redirect()->back();
    }

    public function detail(Rab $rab)
    {
        $data = $rab->datarab;

        return view('admin.detail.rabview', [
            'title' => 'View RAB',
            'ahs' => Ahsp::all(),
            'data' => $data,
            'rab_id' => $rab->id,
            'rabdata' => $rab
        ]);
    }

    public function Tambah(Request $request, $id)
    {
        $request->validate([
            'volume_rab' => 'required',
        ]);
        // dd($request);
        $data = $request->all();
        // dd($data['ahs']);
        $ahsp = Ahsp::find($data['ahs']);
        // dd($ahsp);
        $dahsp = $ahsp->dataahsp;
        // dd($dahsp);
        $ahs = $ahsp->find($data['ahs'])->dataahsp;

        $rab = new DataRab;
        $rab->rincian = $ahsp->nama_ahs;
        $rab->volume = $data['volume_rab'];
        $rab->satuan = $ahsp->satuan;
        $rab->harga_satuan = $ahsp->total;
        $rab->total = $data['volume_rab'] * $ahsp->total;
        $rab->rab_id = $data['rab_id'];
        $status = $rab->save();

        $jumlah = Rab::find($data['rab_id']);

        if ($status) {
            request()->session()->flash('success', 'Aksi Berhasil Dilakukan');
        } else {
            request()->session()->flash('error', 'Maaf Aksi Gagal dilakukan Dilakukan');
        }

        // foreach ($ahs as $p) {
        //     echo $p;
        // }

        // $datarab = new DataRab();
        // $datarab->rincian =
        // $datarab->volume =
        // $datarab->satuan =
        // $datarab->harga_satuan =
        // $datarab->total =
        // $datarab->rab_id =;
        return redirect()->back();
    }

    public function trash($rab, $datarab)
    {
        $data = Rab::find($rab);
        $data = $data->datarab->find($datarab);
        $data->delete();
        return redirect()->back();
    }

    public function update(Request $request, $rab, $datarab)
    {
        $data = Rab::find($rab);
        $data = $data->datarab->find($datarab);
        $status = $data->update($request->all());

        if ($status) {
            request()->session()->flash('success', 'Aksi Berhasil Dilakukan');
        } else {
            request()->session()->flash('error', 'Maaf Aksi Gagal dilakukan Dilakukan');
        }
        return redirect()->back();
    }
}
