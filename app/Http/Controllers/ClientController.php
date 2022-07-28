<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;

use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function index()
    {
        return view('admin.client', [
            'title' => 'Client',
            'data' => Client::latest()->Cari(request(['cari']))->paginate(8)->withQueryString()
        ]);
    }
    public function store(Request $request)
    {
        if ($request->file('foto_ktp')) {
            $ktp = $request->file('foto_ktp')->store('client');
        }
        $data = $request->all();

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password =  Hash::make($data['password']);
        $user->rule = 'client';
        $user->save();

        $client = new Client;
        $client->nama = $data['nama'];
        $client->tgl_lahir = $data['kalender'];
        $client->tempat_lahir = $data['tempat_lahir'];
        $client->alamat = $data['alamat'];
        $client->jk = $data['jk'];
        $client->no_ktp = $data['no_ktp'];
        $client->foto_ktp = $ktp;
        $client->no_telp = $data['no_telp'];
        $client->users_id = $user->id;
        $client->save();

        return redirect()->back()->with('ditambah', 'Ditambahkan');
    }

    public function detail(Client $client)
    {
        return view('admin.detail.detailclient', [
            'title' => 'Detail Client',
            'data' => $client
        ]);
    }

    public function trash($id)
    {
        $data = Client::find($id);
        $user = User::find($data->users_id);

        $data->delete();
        $user->delete();

        return redirect()->back()->with('ditambah', 'Dihapus');
    }
    public function edit(Client $client)
    {
        return view('admin.edit.clientedit', [
            'title' => 'Edit',
            'data' => $client
        ]);
    }

    public function update(Request $request, Client $client)
    {
        if ($request->file('foto_ktp')) {
            $ktp = $request->file('foto_ktp')->store('client');
        }
        $data = $request->all();
        $client->nama = $data['nama'];
        $client->tgl_lahir = $data['kalender'];
        $client->tempat_lahir = $data['tempat_lahir'];
        $client->alamat = $data['alamat'];
        $client->jk = $data['jk'];
        $client->no_ktp = $data['no_ktp'];
        $client->foto_ktp = $ktp;
        $client->no_telp = $data['no_telp'];
        $client->save();

        return redirect()->back()->with('diubah', 'Berhasil Update Data');
    }
}
