<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;

class Materialwire extends Component
{
    public $cari;

    public function addMaterial(Material $id)
    {
        dd($id);
    }

    public function render()
    {
        return view('livewire.materialwire', [
            'data' => Material::latest()->where('kode_material', 'like', '%' . $this->cari . '%')
                ->orWhere('nama_material', 'like', '%' . $this->cari . '%')->paginate(10)
        ])
            ->extends('component.template')
            ->section('konten');
    }
}
