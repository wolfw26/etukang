<?php

namespace App\Http\Livewire\Cetak\Material;

use Livewire\Component;
use App\Models\Material;

class All extends Component
{
    public function render()
    {
        return view('livewire.cetak.material.all', [
            'materials' => Material::all()
        ])
            ->extends('component.template', ['title' => 'Cetak Material'])
            ->section('konten');
    }
}
