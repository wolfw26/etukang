<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RabController extends Controller
{
    public function index()
    {
        return view('admin.rab', [
            'title' => 'RAB'
        ]);
    }
}
