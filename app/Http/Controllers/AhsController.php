<?php

namespace App\Http\Controllers;

use App\Models\Ahs;
use Illuminate\Http\Request;

class AhsController extends Controller
{
    public function index()
    {
        return view('admin.ahs', [
            'title' => 'AHS',
            'data' => Ahs::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Ahs::class::create($data);
        return redirect()->route('ahs');
    }
}
