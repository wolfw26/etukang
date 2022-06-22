<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

use function GuzzleHttp\Promise\all;

class ClientController extends Controller
{
    public function index()
    {
        return view('admin.client', [
            'title' => 'Client',
            'data' => Client::all()
        ]);
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required|max:100',
        //     'tgl_lahir' => 'required|date',
        //     'tempat_lahir' => 'required|string',
        //     'alamat' => 'required|string',
        //     'jk' => 'required|string',
        //     'no_ktp' => 'required|string|min:8',
        //     'foto_ktp' => 'string|image',
        //     'no_telp' => 'required|string',
        //     'user_id' => 'integer'
        // ]);

        Client::create($request->all());
        return redirect()->route('client');
    }
}
