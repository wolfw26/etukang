<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {

        $data = $request->all();

        $user = new User;
        $user->name = $data['username'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->rule = $data['rule'];
        $user->save();

        $client = new Client;
        $client->nama = $data['nama'];
        $client->tgl_lahir = $data['tanggal'];
        $client->tempat_lahir = $data['tempat_lahir'];
        $client->alamat = $data['alamat'];
        $client->jk = $data['jk'];
        $client->no_ktp = $data['no_ktp'];
        $client->foto_ktp = $data['foto_ktp'];
        $client->no_telp = $data['no_telp'];
        $client->users_id = $user->id;
        $client->save();

        return redirect()->back()->with('status', 'Registrasi Berhasil');
    }
}
