<?php

namespace App\Http\Livewire\Alat;

use App\Models\Alatrusak as ModelsAlatrusak;
use App\Models\Alatin as ModelsAlatin;
use App\Models\Alat;

use Livewire\Component;

class Alatrusak extends Component
{
    public $kode, $deskripsi, $jumlah, $satuan, $nama, $id_penambah, $status, $tanggal, $tanggal_masuk;
    public $id_alat;
    public $harga, $tempat, $tharga;

    public function dataMasuk(ModelsAlatrusak $id)
    {
        $this->deskripsi = $id->deskripsi;
        $this->jumlah = $id->jumlah;
        $this->satuan = $id->satuan;
        $this->id_alat = $id->id;
    }
    public function masuk()
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
        $alat->alatrusak_id = $this->id_alat;
        $alat->save();

        $id = $alat->id;

        $alat = new Alat;
        $alat->kode = $this->kode;
        $alat->nama = $this->deskripsi;
        $alat->fungsi = '-';
        $alat->Merk = '-';
        $alat->status = '-';
        $alat->kepemilikan = 'dimiliki';
        $alat->satuan = $this->satuan;
        $alat->harga_satuan = $this->harga;
        $alat->masuk_id = $id;
        $alat->save();

        $data = ModelsAlatrusak::find($this->id_alat);
        $data->status = 'selesai';
        $data->save();

        $this->kode = null;
        $this->deskripsi = null;
        $this->jumlah = null;
        $this->satuan = null;
        $this->nama = null;
        $this->tanggal = null;
        $this->id_penambah = null;
        $this->status = null;
        $this->tanggal_masuk = null;
        $this->id_alat = null;
        $this->tempat = null;
        $this->harga = null;
        $this->tharga = null;
    }

    public function tambah()
    {
        $data = new ModelsAlatrusak;
        $data->deskripsi = $this->deskripsi;
        $data->jumlah = $this->jumlah;
        $data->satuan = $this->satuan;
        $data->nama = 'admin';
        $data->id_penambah = '';
        $data->status = 'proses';
        $data->tanggal = $this->tanggal;
        $data->save();
        $this->deskripsi = null;
        $this->jumlah = null;
        $this->satuan = null;
        $this->nama = null;
        $this->tangal = null;
    }


    public function edit(ModelsAlatrusak $id)
    {
        $this->deskripsi = $id->deskripsi;
        $this->jumlah = $id->jumlah;
        $this->satuan = $id->satuan;
        $this->nama = $id->nama;
        $this->tanggal = $id->tanggal;
        $this->id_alat = $id->id;
    }
    public function update()
    {
        $alat = ModelsAlatrusak::find($this->id_alat);
        $alat->deskripsi = $this->deskripsi;
        $alat->jumlah = $this->jumlah;
        $alat->satuan = $this->satuan;
        $alat->nama = $this->nama;
        $alat->tanggal = $this->tanggal;
        $alat->save();

        session()->flash('ubah', 'Berhasil Di ubah');

        $this->deskripsi = null;
        $this->jumlah = null;
        $this->satuan = null;
        $this->nama = null;
        $this->tanggal = null;
    }
    public function hapus($id)
    {
        $data = ModelsAlatrusak::find($id);
        $data->delete();
    }
    public function render()
    {
        if ($this->harga != '' && $this->jumlah != '') {
            $this->tharga = $this->harga * $this->jumlah;
        } else {
            $this->tharga = 0;
        }

        return view('livewire.alat.alatrusak', [
            'data' => ModelsAlatrusak::latest()->where('status', 'proses')->get(),
            'selesai' => ModelsAlatrusak::latest()->where('status', 'selesai')->get()
        ]);
    }
}
