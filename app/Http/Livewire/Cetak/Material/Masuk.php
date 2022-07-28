<?php

namespace App\Http\Livewire\Cetak\Material;

use Livewire\Component;
use App\Models\Material;
use App\Models\Material_in;

class Masuk extends Component
{
    public $tglawl, $tglakhr;


    // public function mount($tglawl, $tglakhr)
    // {
    //     $this->tglawl = $tglawl;
    //     $this->tglakhr = $tglakhr;
    //     dd($this->tglawl . $this->tglakhr);
    // }
    public function mount($awal, $akhir)
    {
        $this->tglawl = $awal;
        $this->tglakhr = $akhir;
    }
    public function render()
    {
        $material1 = Material_in::first()->whereBetween('tanggal', [$this->tglawl, $this->tglakhr]);
        $material = $material1->orderBy('id', 'asc')->get();
        return view('livewire.cetak.material.masuk', [
            'data' => $material
        ])
            ->extends('livewire.Cetak.template', [
                'judul' => 'MATERIAL',
                'tanggal' => "  Dari Tanggal :" . " "  . $this->tglawl . "" . "   Sampai : " . $this->tglakhr,

            ])
            ->section('cetak');
    }
}
