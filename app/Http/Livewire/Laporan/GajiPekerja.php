<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Penggajian;
use Livewire\Component;

class GajiPekerja extends Component
{
    public $tglawal, $tglakhir;
    public $gaji;

    public function cari()
    {
        $alat = Penggajian::first()->whereBetween('tanggal', [$this->tglawal, $this->tglakhir]);
        $this->gaji = $alat->orderBy('id', 'asc')->get();
    }
    public function render()
    {
        $gaji = Penggajian::all();
        return view('livewire.laporan.gaji-pekerja', [
            'gaji' => $this->gaji
        ])
            ->extends('component.template', ['title' => 'Laporan Gaji Pekerja'])
            ->section('konten');
    }
}
