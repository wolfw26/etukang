<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Penggajian;
use Livewire\Component;

class GajiPekerja extends Component
{
    public function render()
    {
        $gaji = Penggajian::all();
        return view('livewire.laporan.gaji-pekerja', [
            'gaji' => $gaji
        ])
            ->extends('component.template', ['title' => 'Laporan Gaji Pekerja'])
            ->section('konten');
    }
}
