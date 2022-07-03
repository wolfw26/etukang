<?php

namespace App\Http\Controllers;

use App\Models\Ahs;
use App\Models\Ahsp;
use Illuminate\Http\Request;

class RabController extends Controller
{
    // public function index()
    // {
    //     $ahsp = Ahsp::all();
    //     return view('admin.rab', [
    //         'title' => 'RAB',
    //         'ahsp' => $ahsp,

    //     ]);
    // }

    public function index()
    {
        return view('admin.rab', [
            'title' => 'RAB',
            'data' => Ahsp::all()
        ]);
    }

    public function store(Request $request)
    {
        $ahs = Ahsp::find($request['ahs']);
        dd($ahs);
    }
}
