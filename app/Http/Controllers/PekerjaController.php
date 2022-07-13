<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use App\Models\Pekerja;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    public function index()
    {

        return view('admin.pekerja', [
            'title' => 'Pekerja',
            'data' => Pekerja::latest()->Cari(request(['cari']))->paginate(3)->withQueryString()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nope' => 'required',
            'jk' => 'required',
            'tempat' => 'required',
            'tgl_lahir' => 'required',
            'pendidikan' => 'required',
            'fotoKtp' => 'image|file|max:2048',
            'foto' => 'image|file|max:2048'
        ]);
        if ($request->file('fotoKtp')) {
            $request['fotoKtp'] = $request->file('fotoKtp')->store('pekerja');
        }
        if ($request->file('foto')) {
            $request['foto'] = $request->file('foto')->store('pekerja');
        }
        $data = $request->all();
        $pekerja = new Pekerja;
        $pekerja->nama = $data['nama'];
        $pekerja->jenis_kelamin = $data['jk'];
        $pekerja->alamat = $data['alamat'];
        $pekerja->tempat_lahir = $data['tempat'];
        $pekerja->tgl_lahir = $data['tgl_lahir'];
        $pekerja->nope = $data['nope'];
        $pekerja->pendidikan = $data['pendidikan'];
        $pekerja->foto_ktp = $request['fotoKtp'];
        $pekerja->image = $request['foto'];
        $pekerja->save();

        return redirect()->back()->with('berhasil', 'Berhasil Di Tambah');
    }
}
