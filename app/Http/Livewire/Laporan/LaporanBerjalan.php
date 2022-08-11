<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Proyek;
use Livewire\Component;

class LaporanBerjalan extends Component
{
    public function render()
    {
        return view('livewire.laporan.laporan-berjalan', [
            'proyek' => Proyek::where('status', 'DIKERJAKAN')->get()
        ])
            ->extends('component.template', ['title' => 'Laporan Rencana Proyek'])
            ->section('konten');
    }
}
