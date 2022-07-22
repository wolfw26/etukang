<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Alatin;
use App\Models\Alatrusak;
use App\Models\Alatsewa;
use App\Models\Material_in;
use App\Models\Materialout;
use App\Models\Proyek;
use Livewire\Component;

class Laporanalat extends Component
{
    public $kategori = 0;
    public $proyekid = 0;
    public $awalMasuk = 0, $akhirMasuk = 0;
    public $all;


    public function cariMasuk()
    {
        if ($this->awalMasuk != 0 && $this->akhirMasuk != 0) {
            $this->all = Alatin::whereBetween('tanggal', [$this->awalMasuk, $this->akhirMasuk])->get();
        } else {
            $this->all = [];
        }
    }
    public function render()
    {
        if ($this->kategori == 'sewa') {
            $data = Alatsewa::all();
        } else {
            $data = [];
        }
        if ($this->kategori == 'masuk') {
            $data = $this->all;
        }
        if ($this->kategori == 'rusak') {
            $data = Alatrusak::all();
        }
        return view('livewire.laporan.laporanalat', [
            'data' => $data,
            'proyek' => Proyek::all()
        ])
            ->extends('component.template', ['title' => 'Laporan Alat'])
            ->section('konten');
    }
}
