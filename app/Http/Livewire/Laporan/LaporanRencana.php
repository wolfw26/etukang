<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Rab;
use App\Models\Proyek;
use App\Models\DataRab;
use App\Models\RencanaKerja;
use Livewire\Component;

class LaporanRencana extends Component
{
    public $data;
    public $datarab, $dataProyek;
    public $tglAwal, $tglAkhir;

    public function cari()
    {
        $proyek = Proyek::find($this->data);
        $rab = Rab::where('proyek_id', $this->data)->first();
        $datarab = DataRab::where('rab_id', $rab->id)->first();
        $this->datarab = RencanaKerja::where('proyek_id', $proyek->id)->get();
    }
    public function render()
    {
        if ($this->tglAwal != null && $this->tglAkhir != null) {
            $this->dataProyek = Proyek::first()->whereBetween('tanggal_mulai', [$this->tglAwal, $this->tglAkhir])->get();
        } else {
            $this->dataProyek = Proyek::all();
        }
        $proyek = Proyek::all();
        return view('livewire.laporan.laporan-rencana', [
            'proyek' => $this->dataProyek,
            'rencana' => $this->datarab,
            'id_proyek' => $this->data
        ])
            ->extends('component.template', ['title' => 'Laporan Rencana Proyek'])
            ->section('konten');
    }
}
