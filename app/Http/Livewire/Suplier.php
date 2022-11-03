<?php

namespace App\Http\Livewire;

use App\Models\Material_in;
use App\Models\Suplier as ModelsSuplier;
use Livewire\Component;

class Suplier extends Component
{
    public $kode, $nama, $alamat, $norek;


    public function edit(ModelsSuplier $data)
    {
        $this->kode = $data->kode;
        $this->nama = $data->nama;
        $this->alamat = $data->alamat;
        $this->norek = $data->norek;
    }

    public function update(ModelsSuplier $data)
    {
        $data->kode = $this->kode;
        $data->nama = $this->nama;
        $data->alamat = $this->alamat;
        $data->norek = $this->norek;
        $data->save();

        $this->kode = null;
        $this->nama = null;
        $this->alamat = null;
        $this->norek = null;
    }

    public function hapus(ModelsSuplier $data)
    {
        $material = Material_in::where('suplier_id', $data->id);
        $material->suplier_id = null;
        $data->delete();
    }

    public function tambah()
    {
        $data = new ModelsSuplier;
        $data->kode = $this->kode;
        $data->nama = $this->nama;
        $data->alamat = $this->alamat;
        $data->norek = $this->norek;
        $data->save();
    }
    public function render()
    {
        return view('livewire.suplier', [
            'data' => ModelsSuplier::all()
        ])
            ->extends('component.template', ['title' => 'Suplier'])
            ->section('konten');
    }
}
