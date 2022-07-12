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
        $this->status = $id->status;
        $this->tharga = $this->harga * $this->jumlah;
        $this->merk = $data->Merk;
        $this->fungsi = $data->fungsi;
    }
    public function update()
    {
        $data = ModelsAlatin::find($this->id_data);
        $data->kode = $this->kode;
        $data->keterangan = $this->deskripsi;
        $data->tanggal = $this->tanggal_masuk;
        $data->harga = $this->harga;
        $data->tempat = $this->tempat;
        $data->jumlah = $this->jumlah;
        $data->satuan = $this->satuan;
        $data->status = $this->status;
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
        $alat = new ModelsAlatin;
        $alat->kode = $this->kode;
        $alat->keterangan = $this->deskripsi;
        $alat->tanggal = $this->tanggal_masuk;
        $alat->harga = $this->harga;
        $alat->tempat = $this->tempat;
        $alat->jumlah = $this->jumlah;
        $alat->satuan = $this->satuan;
        $alat->status = $this->status;
        $alat->total_harga = $this->harga * $this->jumlah;
        $alat->save();

        session()->flash('tambah', 'Berhasil');

        $id = $alat->id;

        $alat = new Alat;
        $alat->kode = $this->kode;
        $alat->nama = $this->deskripsi;
        $alat->fungsi = $this->fungsi;
        $alat->Merk = $this->merk;
        $alat->status = $this->status;
        $alat->kepemilikan = 'dimiliki';
        $alat->satuan = $this->satuan;
        $alat->harga_satuan = $this->harga;
        $alat->masuk_id = $id;
        $alat->save();

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

    public function hapus($id)
    {
        $data = ModelsAlatin::find($id);
        $alat = Alat::where('masuk_id', $id)->first();
        $alat->delete();
        $data->delete();
    }





    public function render()
    {
        if ($this->harga != '' && $this->jumlah != '') {
            $this->tharga = $this->harga * $this->jumlah;
        } else {
            $this->tharga = 0;
        }


        $data = ModelsAlatin::all();
        return view('livewire.alat.alatin', [
            'data' => ModelsAlatin::latest()->where('kode', 'like', '%' . $this->cari . '%')
                ->orWhere('keterangan', 'like', '%' . $this->cari . '%')->get()
        ])

            ->extends('component.template', ['title' => 'Alat'])
            ->section('konten');
    }
}
