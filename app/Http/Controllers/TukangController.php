<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use Illuminate\Http\Request;

class TukangController extends Controller
{
    public function index()
    {
        return view('admin.tukang', [
            'title' => 'Tukang',
            'data' => Tukang::all()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required|string',
            'no_ktp' => 'required|integer|min:8',
            'foto_ktp' => 'string|image',
            'jk' => 'required|string',
            'no_telp' => 'required|integer'
        ]);

        Tukang::create($request->all());
        return redirect()->route('tukang')->with('sukses', 'Data Berhasil Ditambah');
    }
}
