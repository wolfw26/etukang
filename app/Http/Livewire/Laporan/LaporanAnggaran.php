<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Proyek;
use App\Models\Rab;
use Livewire\Component;

class LaporanAnggaran extends Component
{
    public $proyek;
    public $tglAwal, $tglAkhir;
    public $data;

    public function cari()
    {
        $this->data = Rab::where('proyek_id', $this->proyek)->first();
    }
    public function render()
    {
        if ($this->tglAwal != null && $this->tglAkhir != null) {
            $this->data = Rab::first()->whereBetween('tanggal', [$this->tglAwal, $this->tglAkhir])->get();
        } else {
            $this->data = Rab::all();
        }
        $rab = $this->data;
        return view('livewire.laporan.laporan-anggaran', [
            'proyekid' => Proyek::all(),
            'rab' => $this->data
        ])
            ->extends('component.template', ['title' => 'Laporan Anggaran'])
            ->section('konten');
    }
}
