<?php

namespace App\Http\Livewire\Cetak;

use App\Models\Rab;
use App\Models\Proyek;
use Livewire\Component;

class CetakAnggaran extends Component
{
    public $data;
    public $id_proyek;


    public function mount($proyek)
    {
        $this->data = Rab::where('proyek_id', $proyek)->first();
        $this->id_proyek = $proyek;
    }
    public function render()
    {
        $proyek = Proyek::find($this->id_proyek);
        return view('livewire.cetak.cetak-anggaran', [
            'rab' => $this->data
        ])
            ->extends('livewire.Cetak.template', [
                'judul' => 'ANGGARAN PROYEK ' . $proyek->nama_proyek,
                'tanggal' => "   Tanggal Mulai :" . " "  . $proyek->tanggal_mulai . "" . "   Sampai : " . $proyek->tanggal_selesai,

            ])
            ->section('cetak');
    }
}
