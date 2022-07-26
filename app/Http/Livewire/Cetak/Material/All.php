<?php

namespace App\Http\Livewire\Cetak\Material;

use Livewire\Component;
use App\Models\Material;

class All extends Component
{
    public function render()
    {
        return view('livewire.cetak.material.all', [
            'data' => Material::all()
        ])
            ->extends('livewire.Cetak.template', [
                'judul' => 'MATERIAL',
                'tanggal' => "Tanggal : " . now()->format('d-M-Y')
            ])
            ->section('cetak');
    }
}
