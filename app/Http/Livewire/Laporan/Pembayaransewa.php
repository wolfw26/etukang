<?php

namespace App\Http\Livewire\Laporan;

use Livewire\Component;

class Pembayaransewa extends Component
{
    public function render()
    {
        return view('livewire.laporan.pembayaransewa')
            ->extends('component.template', ['title' => 'Laporan Pembayaran Sewa'])
            ->section('konten');
    }
}
