<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;

class StockMaterial extends Component
{
    public $cari;
    public $page;

    public function stok()
    {
        $this->page = 'stok';
    }
    public function masuk()
    {
        $this->page = 'masuk';
    }
    public function keluar()
    {
        $this->page = 'keluar';
    }
    public function render()
    {

        return view('livewire.stock-material', [
            'title' => 'Stock',
            'data' =>  Material::latest()->where('kode_material', 'like', '%' . $this->cari . '%')
                ->orWhere('nama_material', 'like', '%' . $this->cari . '%')->paginate(7)
        ])
            ->extends('component.template', ['title' => 'Stock'])
            ->section('konten');
    }
}
