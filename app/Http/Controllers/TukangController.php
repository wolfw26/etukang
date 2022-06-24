<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use App\Models\User;
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
    public function detail(Tukang $tukang)
    {
        // dd($tukang);
        return view('admin.detailtukang', [
            'title' => 'Tukang',
            'data' => $tukang
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
            'no_telp' => 'required|integer',
            'email' => 'required|unique:users',
            'password' => 'min:8|required'
        ]);
        $data = $request->all();

        $user = new User;
        $user->name = $data['username'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->rule = 'tukang';
        $user->save();

        $tukang = new Tukang;
        $tukang->nama = $data['nama'];
        $tukang->alamat = $data['alamat'];
        $tukang->no_ktp = $data['no_ktp'];
        $tukang->foto_ktp = $data['image'];
        $tukang->jk = $data['jk'];
        $tukang->no_telp = $data['no_telp'];
        $tukang->pendidikan = $data['pendidikan'];
        $tukang->keahlian = $data['keahlian'];
        $tukang->lain = $data['lain'];
        $tukang->users_id = $user->id;
        $tukang->save();
        return redirect()->route('tukang')->with('sukses', 'Data Berhasil Ditambah');
    }

    public function trash($id)
    {

        $data = Tukang::find($id);
        $data->delete();
        return redirect()->back()->with('sukses', 'Data Berhasil Terhapus');
    }
    public function update($id)
    {

        $data = Tukang::find($id);
        $data->delete();
        return redirect()->back()->with('sukses', 'Data Berhasil Terhapus');
    }
}
