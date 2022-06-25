<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;

use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

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

        $data = $request->all();
        $img = $request->file('foto_ktp')->store('client-img');

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->rule = 'client';
        $user->save();

        $client = new Client;
        $client->nama = $data['nama'];
        $client->tgl_lahir = $data['kalender'];
        $client->tempat_lahir = $data['tempat_lahir'];
        $client->alamat = $data['alamat'];
        $client->jk = $data['jk'];
        $client->no_ktp = $data['no_ktp'];
        $client->foto_ktp = $img;
        $client->no_telp = $data['no_telp'];
        $client->users_id = $user->id;
        $client->save();

        return redirect()->back()->with('ditambah', 'Ditambahkan');
    }

    public function detail(Client $client)
    {
        return "Detail";
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
    public function edit($id)
    {
        return "edit";
        $data = Client::find($id);

        $data->delete();
        return redirect()->back()->with('ditambah', 'Dihapus');
    }
}
