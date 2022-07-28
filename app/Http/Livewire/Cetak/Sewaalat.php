<?php

namespace App\Http\Livewire\Cetak;

use Livewire\Component;

class Sewaalat extends Component
{
    public function render()
    {
        return view('livewire.cetak.sewaalat')
            ->extends('livewire.Cetak.template', [
                'judul' => 'Sewa Alat',
                'tanggal' => "  Dari Tanggal :"  . "   Sampai Tanggal : ",

            ])
            ->section('cetak');
    }
}
