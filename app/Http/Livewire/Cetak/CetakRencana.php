<?php

namespace App\Http\Livewire\Cetak;

use App\Models\Proyek;
use App\Models\RencanaKerja;
use Livewire\Component;

class CetakRencana extends Component
{
    public $data;
    public $id_proyek;

    public function mount($proyek)
    {
        $this->data = RencanaKerja::where('proyek_id', $proyek)->get();
        $this->id_proyek = $proyek;
    }
    public function render()
    {
        $proyek = Proyek::find($this->id_proyek);
        return view('livewire.cetak.cetak-rencana', [
            'rencana' => $this->data
        ])
            ->extends('livewire.Cetak.template', [
                'judul' => 'Rencana Proyek ' . $proyek->nama_proyek,
                'tanggal' => "   Tanggal Mulai :" . " "  . $proyek->tanggal_mulai . "" . "   Sampai : " . $proyek->tanggal_selesai,

            ])
            ->section('cetak');
    }
}
