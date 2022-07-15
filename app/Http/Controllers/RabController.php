<?php

namespace App\Http\Controllers;

use App\Models\Rab;
use App\Models\Ahsp;
use App\Models\Proyek;
use App\Models\DataRab;
use Illuminate\Http\Request;

class RabController extends Controller
{
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
        return redirect()->back();
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $rab = new Rab;

        $rab->nama_rab = $data['nama_rab'];
        $rab->kode_rab = $data['kode_rab'];
        $rab->proyek_id = $data['proyek_id'];
        $rab->save();

        return redirect()->route('rab.index');
    }

    public function delete($rab)
    {

        $data = Rab::find($rab);
        $data->delete();
        return redirect()->back();
    }

    public function detail(Rab $rab)
    {
        $data = $rab->datarab;

        return view('admin.detail.rabview', [
            'title' => 'View RAB',
            'ahs' => Ahsp::all(),
            'data' => $data,
            'rab_id' => $rab->id


        ]);
    }

    public function Tambah(Request $request, $id)
    {
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
        $rab->satuan = "";
        $rab->harga_satuan = $ahsp->total;
        $rab->total = $data['volume_rab'] * $ahsp->total;
        $rab->rab_id = $data['rab_id'];
        $rab->save();

        $jumlah = Rab::find($data['rab_id']);
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
        $data->update($request->all());
        return redirect()->back();
    }
}
