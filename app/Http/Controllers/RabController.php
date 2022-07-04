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
        return view('admin.rab', [
            'title' => 'RAB',
            'data' => Rab::all()
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all;
        $rab = new Rab;

        $rab->nama_rab = $data->nama_rab;
        $rab->kode_rab = $data->kode_rab;
        $rab->proyek_id = $data->proyek_id;
        $rab->save();

        return redirect()->route('rab.index');
    }

    public function detail(Rab $rab)
    {
        $data = $rab->with('datarab')->get();

        return view('admin.detail.rabview', [
            'title' => 'View RAB',
            'ahs' => Ahsp::all(),
            'data' => $data,
            'rab_id' => $rab->id

        ]);
    }
    public function tambah(Request $request)
    {
        // dd($request);
        $data = $request->all();
        $ahsp = Ahsp::with('dataahsp')->get();
        $ahs = $ahsp->find($data['ahs'])->dataahsp;

        foreach ($ahs as $p) {
            echo $p;
        }

        // $datarab = new DataRab();
        // $datarab->rincian =
        // $datarab->volume =
        // $datarab->satuan =
        // $datarab->harga_satuan =
        // $datarab->total =
        // $datarab->rab_id =;
    }
}
