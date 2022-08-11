<?php

namespace App\Http\Livewire\Cetak;

use App\Models\Penggajian;
use Livewire\Component;

class Gaji extends Component
{
    public $tglawal, $tglakhir;
    public $gajipekerja;

    public function mount($awal, $akhir)
    {
        $this->tglawal = $awal;
        $this->tglakhir = $akhir;
        $this->gajipekerja = Penggajian::first()->whereBetween('tanggal', [$this->tglawal, $this->tglakhir])->get();
        // if ($awal == 0 && $akhir == 0) {
        //     $this->tglawal = 0;
        //     $this->tglakhir = 0;
        //     $this->invoice = Penggajian::all();
        // } else {
        // }
    }
    public function render()
    {
        return view('livewire.cetak.gaji', [
            'gaji' => $this->gajipekerja
        ])
            ->extends('livewire.Cetak.template', [
                'judul' => 'Gaji Pekerja',
                'tanggal' => " Dari :   " . date('d-M-Y', strtotime($this->tglawal)) . "  Sampai : " . date('d-M-Y', strtotime($this->tglakhir)),

            ])
            ->section('cetak');
    }
}
