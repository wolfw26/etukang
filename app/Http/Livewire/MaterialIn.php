<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;
use App\Models\Material_in;

class MaterialIn extends Component
{

    public $dataMaterial;
    public $dropdown;
    public $data;
    public $nama;
    public $kode;
    public $tanggal;
    public $jumlah;
    public $satuan;

    public function render()
    {
        if (!empty($this->dropdown)) {
            $this->data = Material::find($this->dropdown);
            $this->nama = $this->data->nama_material;
            $this->kode = $this->data->kode_material;
        }

        return view('livewire.material-in', [
            'material' => Material::all(),
            'materialin' => Material_in::all()
        ])
            ->extends('component.template')
            ->section('konten');
    }

    public function store()
    {
        $data = Material::find($this->dropdown);



        Material_in::create([
            "tanggal" => $this->tanggal,
            'kode_material' => $this->kode,
            'nama_material' => $this->nama,
            'jumlah' => $this->jumlah,
            'satuan' => $this->satuan,
            'material_id' => $this->dropdown
        ]);
        $stok_awal = $data->materialin->latest();
        if ($data->stok == 0) {
            $data->stok = $stok_awal->jumlah;
        }
        $stok_akhir = $data->stok + $this->jumlah;
        Material::create([
            'kode_material' => $data->kode_material,
            'nama_material' => $data->nama_material,
            'stok' => $data->stok,
            'satuan' => $data->satuan,
            'harga_satuan' => $data->harga_satuan,
            'masuk' => $this->jumlah,
            'keluar' => $data->keluar,
            'stok_akhir' => $stok_akhir,
        ]);
        $this->nama = null;
        $this->kode = null;
        $this->tanggal = null;
        $this->jumlah = null;
        $this->satuan = null;
    }
    public function hapus(Material_in $id)
    {
        dd($id);
        $material = Material::find($id);
    }
}
