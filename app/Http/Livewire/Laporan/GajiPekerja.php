<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Penggajian;
use Livewire\Component;

class GajiPekerja extends Component
{
    public $tglawal, $tglakhir;
    public $upah;

    public function cari()
    {
        if ($this->tglawal != null && $this->tglakhir != null) {
            $alat = Penggajian::first()->whereBetween('tanggal', [$this->tglawal, $this->tglakhir]);
            $this->upah = $alat->orderBy('id', 'asc')->get();
        } else {
            $this->upah = Penggajian::all();
        }
    }
    public function render()
    {
        if ($this->tglawal == null && $this->tglakhir == null) {
            $this->upah = Penggajian::all();
        }
        return view('livewire.laporan.gaji-pekerja', [
            'gaji' => $this->upah
        ])
            ->extends('component.template', ['title' => 'Laporan Gaji Pekerja'])
            ->section('konten');
    }
}
