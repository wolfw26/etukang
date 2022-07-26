<?php

namespace App\Http\Livewire\Cetak\Alat;

use App\Models\Alatin;
use Livewire\Component;

class Masuk extends Component
{
    public $tglawal, $tglakhir;

    public function mount($awal, $akhir)
    {
        $this->tglawal = $awal;
        $this->tglakhir = $akhir;
    }
    public function render()
    {
        $material1 = Alatin::first()->whereBetween('tanggal', [$this->tglawal, $this->tglakhir]);
        $material = $material1->orderBy('id', 'asc')->get();
        return view('livewire.cetak.alat.masuk', [
            'data' => $material
        ])
            ->extends('livewire.Cetak.template', [
                'judul' => 'ALAT MASUK',
                'tanggal' => "  Dari Tanggal :" . " "  . $this->tglawal . "" . "   Sampai Tanggal : " . $this->tglakhir,

            ])
            ->section('cetak');
    }
}
