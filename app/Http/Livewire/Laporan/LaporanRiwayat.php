<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Proyek;
use Livewire\Component;

class LaporanRiwayat extends Component
{
    public $tglAwal, $tglAkhir;
    public $dataProyek;
    public function render()
    {
        if ($this->tglAwal != null && $this->tglAkhir != null) {
            $this->dataProyek = Proyek::first()->whereBetween('tanggal_mulai', [$this->tglAwal, $this->tglAkhir])
                ->where('status', 'SELESAI')->get();
        } else {
            $this->dataProyek = Proyek::where('status', 'SELESAI')->get();
        }
        return view('livewire.laporan.laporan-riwayat', [
            'proyek' => $this->dataProyek
        ])

            ->extends('component.template', ['title' => 'Laporan Rencana Proyek'])
            ->section('konten');
    }
}
