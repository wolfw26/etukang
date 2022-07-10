<?php

namespace App\Http\Livewire\Alat;

use Livewire\Component;



class Alatindex extends Component
{
    public $pesan = 'all';
    public function render()
    {
        return view('livewire.alat.alatindex')
            ->extends('component.template', ['title' => 'Alat'])
            ->section('konten');
    }
}
