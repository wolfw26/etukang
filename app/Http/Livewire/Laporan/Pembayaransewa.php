<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Alatsewa;
use Livewire\Component;

class Pembayaransewa extends Component
{
    public $tglawal, $tglakhir;
    public $data;

    public function cari()
    {
        $alat = Alatsewa::first()->whereBetween('created_at', [$this->tglawal, $this->tglakhir]);
        $this->data = $alat->orderBy('id', 'asc')->get();
    }
    public function render()
    {

        return view('livewire.laporan.pembayaransewa', [
            'data' => $this->data
        ])
            ->extends('component.template', ['title' => 'Laporan Pembayaran Sewa'])
            ->section('konten');
    }
}
