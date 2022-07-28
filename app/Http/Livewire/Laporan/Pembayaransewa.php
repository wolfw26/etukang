<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Alatsewa;
use App\Models\invoice;
use Livewire\Component;

class Pembayaransewa extends Component
{
    public $tglawal, $tglakhir;
    public $data;

    public function cari()
    {
        $alat = invoice::first()->whereBetween('tanggal_invoice', [$this->tglawal, $this->tglakhir]);
        $this->data = $alat->orderBy('id', 'asc')->get();
    }
    public function render()
    {
        if ($this->tglawal != null && $this->tglakhir != null) {
            $data = $this->data;
        } else {
            $data = invoice::latest()->get();
        }
        return view('livewire.laporan.pembayaransewa', [
            'invoice' => $data
        ])
            ->extends('component.template', ['title' => 'Laporan Pembayaran Sewa'])
            ->section('konten');
    }
}
