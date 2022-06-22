<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use Illuminate\Http\Request;

class TukangController extends Controller
{
    public function index()
    {
        return view('admin.tukang', [
            'title' => 'Tukang',
            'data' => Tukang::all()
        ]);
    }
}
