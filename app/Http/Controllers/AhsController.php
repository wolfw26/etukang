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
}
