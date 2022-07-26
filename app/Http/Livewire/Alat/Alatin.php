<?php

namespace App\Http\Livewire\Alat;

use App\Models\Alat;
use Livewire\Component;
use App\Models\Alatin as ModelsAlatin;



class Alatin extends Component
{
    public $deskripsi, $tempat, $jumlah, $satuan, $kode, $tanggal_masuk, $harga, $status, $cari;
    public $merk = '-', $fungsi = '-';
    public $tharga = 0;
    public $id_data;
    public $pilih, $stok;

    protected $rules = [
        'jumlah' => 'required',
        'tanggal_masuk' => 'required',
        'tempat' => 'required',
        'pilih' => 'required',
    ];

    public function edit(ModelsAlatin $id)
    {
        $data = Alat::where('masuk_id', $id->id)->first();
        $this->id_data = $id->id;
        $this->kode = $id->kode;
        $this->deskripsi = $id->keterangan;
        $this->tanggal_masuk = $id->tanggal;
        $this->harga = $id->harga;
        $this->tempat = $id->tempat;
        $this->jumlah = $id->jumlah;
        $this->satuan = $id->satuan;
        $this->tharga = $this->harga * $this->jumlah;
        $this->merk = $data->Merk;
        $this->fungsi = $data->fungsi;
    }
    public function update()
    {
        $this->validate();
        $data = ModelsAlatin::find($this->id_data);
        $data->kode = $this->kode;
        $data->keterangan = $this->deskripsi;
        $data->tanggal = $this->tanggal_masuk;
        $data->harga = $this->harga;
        $data->tempat = $this->tempat;
        $data->jumlah = $this->jumlah;
        $data->satuan = $this->satuan;
        $data->total_harga = $this->tharga;
        $data->save();

        $alat = Alat::where('masuk_id', $this->id_data)->first();
        $alat->kode = $this->kode;
        $alat->nama = $this->deskripsi;
        $alat->fungsi = $this->fungsi;
        $alat->Merk = $this->merk;
        $alat->status = $this->status;
        $alat->kepemilikan = 'dimiliki';
        $alat->satuan = $this->satuan;
        $alat->harga_satuan = $this->harga;
        $alat->masuk_id = $this->id_data;
        $alat->save();

        session()->flash('edit', 'Berhasil di Update');

        $this->kode = null;
        $this->deskripsi = null;
        $this->tanggal_masuk = null;
        $this->harga = null;
        $this->tempat = null;
        $this->jumlah = null;
        $this->satuan = null;
        $this->status = null;
        $this->tharga = null;
        $this->fungsi = null;
        $this->merk = null;
    }

    public function tambahAlat()
    {
        $this->validate();

        $alat = new ModelsAlatin;
        $alat->kode = $this->kode;
        $alat->keterangan = $this->deskripsi;
        $alat->tanggal = $this->tanggal_masuk;
        $alat->harga = $this->harga;
        $alat->tempat = $this->tempat;
        $alat->jumlah = $this->jumlah;
        $alat->satuan = $this->satuan;
        $alat->total_harga = $this->harga * $this->jumlah;
        $alat->stok_awal = $this->stok;
        $alat->stok = $this->stok + $this->jumlah;
        $alat->alats_id = $this->pilih;
        $alat->save();

        $alatall = Alat::find($this->pilih);
        $alatall->stok = $this->stok + $this->jumlah;
        $alatall->save();

        session()->flash('tambah', 'Berhasil');

        // $id = $alat->id;

        // $alat = new Alat;
        // $alat->kode = $this->kode;
        // $alat->nama = $this->deskripsi;
        // $alat->fungsi = $this->fungsi;
        // $alat->Merk = $this->merk;
        // $alat->status = $this->status;
        // $alat->kepemilikan = 'dimiliki';
        // $alat->satuan = $this->satuan;
        // $alat->harga_satuan = $this->harga;
        // $alat->masuk_id = $id;
        // $alat->save();

        $this->kode = null;
        $this->deskripsi = null;
        $this->tanggal_masuk = null;
        $this->harga = null;
        $this->tempat = null;
        $this->jumlah = null;
        $this->satuan = null;
        $this->status = null;
        $this->tharga = null;
        $this->fungsi = null;
        $this->merk = null;
        $this->pilih = null;
        $this->stok = null;
    }

    public function hapus($id)
    {
        $data = ModelsAlatin::find($id);
        $alat = Alat::where('masuk_id', $id)->first();
        $alat->delete();
        $data->delete();
    }
    public function render()
    {
        if (!empty($this->pilih)) {
            $data = Alat::find($this->pilih);
            $this->deskripsi = $data->nama;
            $this->kode = $data->kode;
            $this->satuan = $data->satuan;
            $this->fungsi = $data->fungsi;
            $this->merk = $data->Merk;
            $this->harga = $data->harga_satuan;
            $this->stok = $data->stok;
        }
        if ($this->harga != '' && $this->jumlah != '') {
            $this->tharga = $this->harga * $this->jumlah;
        } else {
            $this->tharga = 0;
        }


        $data = ModelsAlatin::all();
        return view('livewire.alat.alatin', [
            'data' => ModelsAlatin::latest()->where('kode', 'like', '%' . $this->cari . '%')
                ->orWhere('keterangan', 'like', '%' . $this->cari . '%')->get(),
            'alat' => Alat::where('kepemilikan', 'dimiliki')->get()
        ])

            ->extends('component.template', ['title' => 'Alat'])
            ->section('konten');
    }
}
