<?php

namespace App\Http\Controllers;

use App\Models\Rab;
use App\Models\Proyek;
use Illuminate\Http\Request;

class RabController extends Controller
{
    public function index()
    {
        $rab = Rab::all();
        return view('admin.rab', [
            'title' => 'RAB',
            'data' => $rab,
            'proyek' => Proyek::all()
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

        return redirect()->route('rab');
    }
}
