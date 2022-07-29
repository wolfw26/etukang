<?php

namespace App\Http\Livewire\Cetak;

use App\Models\invoice;
use Livewire\Component;

class Sewaalat extends Component
{
    public $tglawal, $tglakhir;
    public $invoice;


    public function mount($awal, $akhir)
    {
        if ($awal == 0 && $akhir == 0) {
            $this->tglawal = 0;
            $this->tglakhir = 0;
            $this->invoice = invoice::all();
        } else {
            $this->tglawal = $awal;
            $this->tglakhir = $akhir;
            $this->invoice = invoice::first()->whereBetween('tanggal_invoice', [$this->tglawal, $this->tglakhir])->get();
        }
    }
    public function render()
    {
        if ($this->tglawal == 0 && $this->tglakhir == 0) {
            $tanggal = now()->format('d-F-Y');
        } else {
            $tanggal = "Dari Tanggal :  " . date('d-M-Y', strtotime($this->tglawal))   . "   -   " . "   Sampai  :   " . date('d-M-Y', strtotime($this->tglakhir));
        }
        return view('livewire.cetak.sewaalat', [
            'data' => $this->invoice
        ])
            ->extends('livewire.Cetak.template', [
                'judul' => 'SEWA ALAT',
                'tanggal' => $tanggal,
            ])
            ->section('cetak');
    }
}
