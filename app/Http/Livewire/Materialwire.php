<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;
use Livewire\WithFileUploads;
use App\Imports\MaterialImport;
use Maatwebsite\Excel\Facades\Excel;

class Materialwire extends Component
{
    use WithFileUploads;
    public $import;
    public $cari, $idAhsp, $materialall;
    public $kode, $material, $satuan, $harga;


    public function importnow()
    {
        // $data = $this->import;
        // $namafile = $data->getClientOriginalName();
        // $data->store('MaterialData');
        Excel::import(new MaterialImport, $this->import);
        $this->import = null;
    }

    public function edit(Material $id)
    {
        $this->idAhsp = $id->id;
        $this->material = $id->get();
        $this->kode = $id->kode_material;
        $this->material = $id->nama_material;
        $this->satuan = $id->satuan;
        $this->harga = $id->harga_satuan;
    }
    public function editMaterial()
    {
        $data = Material::find($this->idAhsp);
        $data->kode_material = $this->kode;
        $data->nama_material = $this->material;
        $data->satuan = $this->satuan;
        $data->harga_satuan = $this->harga;
        $data->save();

        $this->kode = null;
        $this->material = null;
        $this->satuan = null;
        $this->harga = null;
        $this->idAhsp = null;
    }

    public function render()
    {
        return view('livewire.materialwire', [
            'data' => Material::latest()->where('kode_material', 'like', '%' . $this->cari . '%')
                ->orWhere('nama_material', 'like', '%' . $this->cari . '%')->paginate(20)
        ])
            ->extends('component.template')
            ->section('konten');
    }
}
