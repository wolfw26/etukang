<?php

namespace App\Http\Livewire\Alat;

use Livewire\Component;

class Alatrusak extends Component
{
    public $kode, $deskripsi, $jumlah, $satuan, $nama, $id_penambah, $status, $tanggal;

    public function tambah()
    {
    }
    public function render()
    {
        return view('livewire.alat.alatrusak');
    }
}
