<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;
use App\Models\Material_in;
use App\Models\Stok;
use App\Models\Suplier;

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
    public $pilihcetak, $sup;


    protected $rules = [
        'jumlah' => 'required',
        'tanggal' => 'required',
    ];

    protected $messages = [
        'jumlah.required' => 'Isi Jumlah Material',
        'tanggal.required' => 'Tanggal Kosong',
    ];

    public function render()
    {
        if (!empty($this->dropdown)) {
            $this->data = Material::find($this->dropdown);
            $this->nama = $this->data->nama_material;
            $this->kode = $this->data->kode_material;
            $this->satuan = $this->data->satuan;
            $this->harga_satuan = $this->data->harga_satuan;
        }

        $data = Material_in::all()->groupBy('nama_material');
        $data2 = Material_in::all()->groupBy('tanggal');
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
            'suplier' => Suplier::all(),
            'materialw' => $data,
            'materialtgl' => $data2,
            'material' => Material::all(),
            'materialin' => Material_in::latest()->where('kode_material', 'like', '%' . $this->cari . '%')
                ->orWhere('nama_material', 'like', '%' . $this->cari . '%')->paginate(10)
        ])
            ->extends('component.template', ['title' => 'Material Masuk'])
            ->section('konten');
    }

    public function store()
    {
        $this->validate();
        Material_in::create([
            "tanggal" => $this->tanggal,
            'kode_material' => $this->kode,
            'nama_material' => $this->nama,
            'jumlah' => $this->jumlah,
            'satuan' => $this->satuan,
            'stok_awal' => $this->data->stok_akhir,
            'harga_satuan' => $this->harga_satuan,
            'total' => $this->jumlah * $this->harga_satuan,
            'material_id' => $this->dropdown,
            'suplier_id' => $this->sup
        ]);

        $data = $this->data;
        $material = Material::find($this->dropdown);
        $material->kode_material = $data->kode_material;
        $material->nama_material = $data->nama_material;
        $material->stok = $this->data->stok_akhir;
        $material->satuan = $data->satuan;
        $material->harga_satuan = $data->harga_satuan;
        $material->masuk = $this->jumlah;
        $material->keluar = $data->keluar;
        $material->stok_akhir = $this->data->stok_akhir + $this->jumlah;
        $material->save();

        $stok = new Stok;
        $stok->material = $data->nama_material;
        $stok->tanggal = $this->tanggal;
        $stok->stok = $this->data->stok_akhir;
        $stok->masuk = $this->jumlah;
        $stok->stok_akhir = $this->data->stok_akhir + $this->jumlah;
        $stok->material_id = $this->dropdown;
        $stok->save();

        $this->nama = null;
        $this->kode = null;
        $this->tanggal = null;
        $this->jumlah = null;
        $this->satuan = null;
        $this->harga_satuan = null;
        $this->sup = null;
    }
    public function hapus(Material_in $id)
    {
        dd($id);
        $material = Material::find($id);
    }
}
