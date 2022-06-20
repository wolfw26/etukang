<?php

namespace App\Http\Controllers;

use App\Models\Pekerja;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    public function index()
    {
        return view('admin.pekerja', [
            'title' => 'Pekerja',
            'data' => Pekerja::all()
        ]);
    }
}
