<?php

namespace App\Http\Livewire\Alat;

use App\Models\Alat;
use Livewire\Component;



class Alatindex extends Component
{
    public $pesan = 'all';
    public function render()
    {
        $data = Alat::latest()->get();
        return view('livewire.alat.alatindex', [
            'data' => $data
        ])
            ->extends('component.template', ['title' => 'Alat'])
            ->section('konten');
    }
}
