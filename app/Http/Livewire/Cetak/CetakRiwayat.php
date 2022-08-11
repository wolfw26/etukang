<?php

namespace App\Http\Livewire\Cetak;

use App\Models\Rab;
use App\Models\Proyek;
use Livewire\Component;

class CetakRiwayat extends Component
{
    public $data;

    public function mount($proyek)
    {
        $this->data = Proyek::find($proyek);
    }
    public function render()
    {
        return view('livewire.cetak.cetak-riwayat', [
            'proyek' => $this->data,
            'rab' => Rab::where('proyek_id', $this->data->id)->first()
        ])
            ->extends('livewire.Cetak.template', [
                'judul' => 'Riwat Proyek',
                'tanggal' => "   Tanggal Selesai :  " . date('d-F-Y', strtotime($this->data->tanggal)),

            ])
            ->section('cetak');
    }
}
