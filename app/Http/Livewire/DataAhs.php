<?php

namespace App\Http\Livewire;

use App\Models\Ahsp;
use Livewire\Component;
use App\Models\Material;

class DataAhs extends Component
{
    public $ahs;
    public $page;
    protected $listeners = ['upahStore' => 'render'];



    public function mount(Ahsp $ahsp)
    {
        $this->ahs = $ahsp;
        $upah = $ahsp->dataahsp->where('kategori', 'upah');
        $alat = $ahsp->dataahsp->where('kategori', 'alat');
        $bahan = $ahsp->dataahsp->where('kategori', 'material');
        $ahsp->total_upah = $upah->sum('total');
        $ahsp->total_alat = $alat->sum('total');
        $ahsp->total_bahan = $bahan->sum('total');
        $jumlah = $ahsp->dataahsp->sum('total');
        $profit = $ahsp->profit * $jumlah / 100;
        $ahsp->total = $ahsp->dataahsp->sum('total') + $profit;
        $ahsp->save();
    }
    public function render()
    {
        return view('livewire.data-ahs', [

            'ahsp' => $this->ahs,
            'data' => $this->ahs->dataahsp->sortByDesc('id'),
            'bahan' => Material::all()
        ])->extends('component.template', ['title' => 'Data AHSP'])
            ->section('konten');
    }
}
