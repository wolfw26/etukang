<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use App\Models\Pekerja;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    public function index()
    {
        $dt = Pekerja::with('tukang');
        return view('admin.pekerja', [
            'title' => 'Pekerja',
            'data' => $dt
            // 'tukang' => Tukang::where('id', $pekerja->tukang_id),
        ]);
    }
}
