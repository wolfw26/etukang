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
}
