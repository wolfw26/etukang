<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;
use App\Models\Material_in;

class MaterialIn extends Component
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

        return view('livewire.material-in', [
            'material' => Material::all(),
            'materialin' => Material_in::latest()->where('kode_material', 'like', '%' . $this->cari . '%')
                ->orWhere('nama_material', 'like', '%' . $this->cari . '%')->paginate(10)
        ])
            ->extends('component.template')
            ->section('konten');
    }

    public function store()
    {
        $stok_awal = $this->data;

        Material_in::create([
            "tanggal" => $this->tanggal,
            'kode_material' => $this->kode,
            'nama_material' => $this->nama,
            'jumlah' => $this->jumlah,
            'satuan' => $this->satuan,
            'harga_satuan' => $this->harga_satuan,
            'material_id' => $this->dropdown
        ]);

        $data = $this->data;
        $material = Material::find($this->dropdown);
        $material->kode_material = $data->kode_material;
        $material->nama_material = $data->nama_material;
        $material->stok = $stok_awal->stok_akhir;
        $material->satuan = $data->satuan;
        $material->harga_satuan = $data->harga_satuan;
        $material->masuk = $this->jumlah;
        $material->keluar = $data->keluar;
        $material->stok_akhir = $stok_awal->stok_akhir + $this->jumlah;
        $material->save();

        $this->nama = null;
        $this->kode = null;
        $this->tanggal = null;
        $this->jumlah = null;
        $this->satuan = null;
        $this->harga_satuan = null;
    }
    public function hapus(Material_in $id)
    {
        dd($id);
        $material = Material::find($id);
    }
}
