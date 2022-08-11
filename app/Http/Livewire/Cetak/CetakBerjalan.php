<?php

namespace App\Http\Livewire\Cetak;

use App\Models\Absen;
use App\Models\Client;
use App\Models\Materialout;
use App\Models\Pekerja;
use App\Models\Proyek;
use App\Models\Rab;
use App\Models\RencanaKerja;
use Livewire\Component;

class CetakBerjalan extends Component
{
    public $idproyek, $proyek;
    public function mount($proyek)
    {
        $this->idproyek = $proyek;
        $this->proyek = Proyek::find($proyek);
    }
    public function render()
    {
        $material = Materialout::where('proyek_id', $this->idproyek)->get();
        $absen = Absen::where('proyek_id', $this->idproyek)->get();
        $rencana = RencanaKerja::where('proyek_id', $this->idproyek)->get();
        $rab = Rab::where('proyek_id', $this->idproyek)->first();
        return view('livewire.cetak.cetak-berjalan', [
            'data' => $this->proyek,
            'material' => $material,
            'absen' => $absen,
            'rencana' => $rencana,
            'rab' => $rab,
            'tukang' => Pekerja::where('id', $this->proyek->pekerja_id)->first(),
            'client' => Client::find($this->proyek->client_id)
        ])
            ->extends('livewire.Cetak.template', [
                'judul' => ' Proyek Dikerjakan ',
                'tanggal' => "   Mulai Kerja :" . " "  . date('d-M-Y', strtotime($this->proyek->tanggal_mulai)) . "" . "   Sampai : " . date('d-M-Y', strtotime($this->proyek->tanggal_selesai)),

            ])
            ->section('cetak');
    }
}
