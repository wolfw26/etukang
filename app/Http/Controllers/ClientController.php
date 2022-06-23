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
        Client::create($request->all());
        return redirect()->route('client');
    }
}
