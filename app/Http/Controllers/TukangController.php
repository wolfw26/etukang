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
            'data' => Tukang::latest()->Cari(request(['cari']))->paginate(4)->withQueryString()
        ]);
    }
    public function detail(Tukang $tukang)
    {
        // dd($tukang);
        return view('admin.detail.detailtukang', [
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
            'foto' => 'image',
            'foto_ktp' => 'image',
            'jk' => 'required|string',
            'no_telp' => 'required|integer',
            'email' => 'required|unique:users|email',
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
        $tukang->foto_ktp = $request->file('image')->store('tukang-img');
        $tukang->jk = $data['jk'];
        $tukang->no_telp = $data['no_telp'];
        $tukang->pendidikan = $data['pendidikan'];
        $tukang->keahlian = $data['keahlian'];
        $tukang->lain = $data['lain'];
        $tukang->foto = $request->file('foto')->store('tukang-img');
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
    public function edit(Tukang $tukang)
    {
        return view('admin.edit.edittukang', [
            'title' => 'Edit',
            'data' =>  $tukang
        ]);
    }
    public function update(Request $request, Tukang $tukang)
    {


        $data = $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required|string',
            'no_ktp' => 'required|min:8',
            'foto_ktp' => 'nullable',
            'jk' => 'required|string',
            'no_telp' => 'required',
            'pendidikan' => 'required|string',
            'keahlian' => 'string',
            'lain' => 'string',
            'foto' => 'nullable'
        ]);

        //     dd($request->foto_ktp->store('tukang-img'));
        // $data = $request->all();
        // $foto_ktp = $request->file('foto_ktp')->store('tukang-img');
        // $foto = $request->file('foto')->store('tukang-img');
        $data = $request;
        $tukang = Tukang::find($tukang->id);
        if (isset($data['foto_ktp'])) {
            $foto_ktp = $data->file('foto_ktp')->store('tukang_img');
        }else{
            $foto_ktp = $tukang->foto_ktp;
        }

        if(isset($data['foto'])){
            $foto = $data->file('foto')->store('tukang_img');
        }else{
            $foto = $tukang->foto;
        }

            $tukang->nama = $data['nama'];
            $tukang->alamat = $data['alamat'];
            $tukang->no_ktp = $data['no_ktp'];
            $tukang->foto_ktp = $foto_ktp;
            $tukang->jk = $data['jk'];
            $tukang->no_telp = $data['no_telp'];
            $tukang->pendidikan = $data['pendidikan'];
            $tukang->keahlian = $data['keahlian'];
            $tukang->lain = $data['lain'];
            $tukang->foto = $foto;
            $tukang->save();
        return redirect(route('tukang'))->with('sukses', 'Data Berhasil diubah');
    }
    // $ktp = $request->file('foto_ktp')->store('client-img');
}
