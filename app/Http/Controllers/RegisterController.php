<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'username' => 'required|max:100',
            'email' => 'required|email:dns|unique:users|max:100',
            'password' => 'required|min:8'
        ]);
        dd("Berhasil");
    }
}
