<?php

namespace App\Http\Livewire\Cetak\Material;

use App\Models\Materialout;
use Livewire\Component;

class Keluar extends Component
{
    public $tglawl, $tglakhr;

    public function mount($awal, $akhir)
    {
        $this->tglawl = $awal;
        $this->tglakhr = $akhir;
    }
    public function render()
    {
        $material1 = Materialout::first()->whereBetween('tanggal', [$this->tglawl, $this->tglakhr]);
        $material = $material1->orderBy('id', 'asc')->get();
        return view('livewire.cetak.material.keluar', [
            'data' => $material
        ])->extends('livewire.Cetak.template', [
            'judul' => 'MATERIAL Out',
            'tanggal' => "  Dari Tanggal :" . " "  . $this->tglawl . "" . "   Sampai Tanggal : " . $this->tglakhr,

        ])
            ->section('cetak');
    }
}
