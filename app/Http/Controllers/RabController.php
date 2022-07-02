<?php

namespace App\Http\Controllers;


use App\Models\Ahsp;
use Illuminate\Http\Request;

class RabController extends Controller
{
    public function index()
    {
        $ahsp = Ahsp::all();
        return view('admin.rab', [
            'title' => 'RAB',
            'ahsp' => $ahsp,
            'data' => $ahsp->ahspdata
        ]);
    }
}
