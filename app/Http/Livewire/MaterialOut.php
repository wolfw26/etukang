<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;

class MaterialOut extends Component
{
    public $cari;
    public $dataMaterial;
    public $dropdown;
    public $data;
    public $nama;
    public $kode;
    public $tanggal;
    public $jumlah;
    public $satuan;
    public $harga_satuan;
    public function render()
    {
        if (!empty($this->dropdown)) {
            $this->data = Material::find($this->dropdown);
            $this->nama = $this->data->nama_material;
            $this->kode = $this->data->kode_material;
            $this->satuan = $this->data->satuan;
        }
        return view('livewire.material-out')
            ->extends('component.template')
            ->section('konten');
    }
}
