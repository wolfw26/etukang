<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pekerja;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    public function index()
    {

        return view('admin.pekerja', [
            'title' => 'Pekerja',
            'jabatan' => Jabatan::all(),
            'data' => Pekerja::latest()->Cari(request(['cari']))->paginate(15)->withQueryString()
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
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'fotoKtp' => 'image|file|max:2048',
            'foto' => 'image|file|max:2048'
        ]);
        if ($request->file('fotoKtp')) {
            $ktp = $request->file('fotoKtp')->store('pekerja');
        }
        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('pekerja');
        }
        $data = $request->all();
        $pekerja = new Pekerja;
        $pekerja->nama = $data['nama'];
        $pekerja->jenis_kelamin = $data['jk'];
        $pekerja->alamat = $data['alamat'];
        $pekerja->tempat_lahir = $data['tempat'];
        $pekerja->tgl_lahir = $data['tgl_lahir'];
        $pekerja->nope = $data['nope'];
        $pekerja->jabatan_id = $data['jabatan'];
        $pekerja->pendidikan = $data['pendidikan'];
        $pekerja->foto_ktp = $ktp;
        $pekerja->image = $foto;
        $pekerja->save();

        return redirect()->back()->with('berhasil', 'Berhasil Di Tambah');
    }
    public function detail(Pekerja $id)
    {

        return view('admin.detail.detailpekerja', [
            'title' => 'Pekerja',
            'data' => $id
        ]);
    }

    public function delete(Pekerja $id)
    {
        $id->delete();
        return redirect()->back()->with('hapus', 'Data Di hapus');
    }
}
