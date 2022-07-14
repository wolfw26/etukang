<?php

namespace App\Http\Livewire;

use App\Models\Stok;
use Livewire\Component;
use App\Models\Material;
use App\Models\Materialout as materialouts;


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
    public $pilihcetak;

    public function render()
    {
        if (!empty($this->dropdown)) {
            $this->data = Material::find($this->dropdown);
            $this->nama = $this->data->nama_material;
            $this->kode = $this->data->kode_material;
            $this->satuan = $this->data->satuan;
            $this->harga_satuan = $this->data->harga_satuan;
        }

        $data = materialouts::all()->groupBy('nama_material');
        $data2 = materialouts::all()->groupBy('tanggal');
        // $materialin = collect(Material_in::all());
        // foreach ($materialin as $d) {
        //     $p = $d->all()->groupBy('material_id');
        // }
        // dd($p['1']);
        // $data = $materialin->groupBy('material_id');
        // $grub = $data;
        // $tes = $grub->all();
        // foreach ($tes as $p) {
        // }
        // foreach ($grub as $d) {
        //     dd($d);
        // }
        // foreach ($d as $p) {
        //     dd($p->nama_material);
        // }

        return view('livewire.material-in', [
            'materialw' => $data,
            'materialtgl' => $data2,
            'material' => Material::all(),
            'materialin' => materialouts::latest()->where('kode_material', 'like', '%' . $this->cari . '%')
                ->orWhere('nama_material', 'like', '%' . $this->cari . '%')->paginate(10)
        ])
            ->extends('component.template')
            ->section('konten');
    }

    public function store()
    {
        $stok_awal = $this->data;

        materialouts::create([
            "tanggal" => $this->tanggal,
            'kode_material' => $this->kode,
            'nama_material' => $this->nama,
            'jumlah' => $this->jumlah,
            'satuan' => $this->satuan,
            'stok_awal' => $stok_awal->stok_akhir,
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
        $material->keluar = $this->jumlah;
        $material->stok_akhir = $stok_awal->stok_akhir - $this->jumlah;
        $material->save();

        $stok = new Stok;
        $stok->material = $data->nama_material;
        $stok->tanggal = $this->tanggal;
        $stok->stok = $stok_awal->stok_akhir;
        $stok->keluar = $this->jumlah;
        $stok->stok_akhir = $stok_awal->stok_akhir + $this->jumlah;
        $stok->material_id = $this->dropdown;
        $stok->save();

        $this->nama = null;
        $this->kode = null;
        $this->tanggal = null;
        $this->jumlah = null;
        $this->satuan = null;
        $this->harga_satuan = null;
    }
    public function hapus(materialouts $id)
    {
        dd($id);
        $material = Material::find($id);
    }
}
