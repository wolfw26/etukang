<?php

namespace App\Http\Livewire\Alat;

use App\Models\Alat;
use Livewire\Component;

class Alathome extends Component
{
    public $ceksewa;
    public $kode, $nama, $fungsi = '-', $Merk = '-', $status, $satuan, $harga_satuan;
    public $cari, $carisewa;

    protected $rules = [
        'kode' => 'required',
        'nama' => 'required',
        'satuan' => 'required',
        'harga_satuan' => 'required|integer',
    ];

    public function edit(Alat $alat)
    {
        if ($alat->kepemilikan == "sewa") {
            $this->ceksewa = 1;
        } else {
            $this->ceksewa = False;
        }
        $this->kode = $alat->kode;
        $this->nama = $alat->nama;
        $this->fungsi = $alat->fungsi;
        $this->Merk = $alat->Merk;
        $this->kepemilikan = $alat->kepemilikan;
        $this->satuan = $alat->satuan;
        $this->harga_satuan = $alat->harga_satuan;
    }

    public function update(Alat $alat)
    {
        if ($this->ceksewa == 1) {
            $kepemilikan = "sewa";
        } else {
            $kepemilikan = "dimiliki";
        }
        $alat->kode = $this->kode;
        $alat->nama = $this->nama;
        $alat->fungsi = $this->fungsi;
        $alat->Merk = $this->Merk;
        $alat->kepemilikan = $kepemilikan;
        $alat->satuan = $this->satuan;
        $alat->harga_satuan = $this->harga_satuan;
        $alat->save();

        $this->kode = null;
        $this->nama = null;
        $this->fungsi = null;
        $this->Merk = null;
        $this->status = null;
        $this->ceksewa = False;
        $this->satuan = null;
        $this->harga_satuan = null;

        session()->flash('update', 'Data Berhasil Di Update');
    }

    public function tambah()
    {
        $this->validate();
        if ($this->ceksewa == 1) {
            $kepemilikan = "sewa";
        } else {
            $kepemilikan = "dimiliki";
        }
        $alat = new Alat;
        $alat->kode = $this->kode;
        $alat->nama = $this->nama;
        $alat->fungsi = $this->fungsi;
        $alat->Merk = $this->Merk;
        $alat->kepemilikan = $kepemilikan;
        $alat->satuan = $this->satuan;
        $alat->harga_satuan = $this->harga_satuan;
        $alat->save();

        $this->kode = null;
        $this->nama = null;
        $this->fungsi = null;
        $this->Merk = null;
        $this->status = null;
        $this->ceksewa = null;
        $this->satuan = null;
        $this->harga_satuan = null;
    }
    public function hapus(Alat $alat)
    {
        $alat->delete();
    }

    public function render()
    {
        $data = Alat::latest()->where('nama', 'like', '%' . $this->cari . '%')
            ->where('kepemilikan', 'dimiliki');
        return view('livewire.alat.alathome', [
            'data' => $data->get(),
            'sewa' => Alat::latest()->where('kepemilikan', 'sewa')
                ->where('nama', 'like', '%' . $this->carisewa . '%')->get()
        ])
            ->extends('component.template', ['title' => 'Data Alat'])
            ->section('konten');
    }
}
