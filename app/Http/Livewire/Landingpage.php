<?php

namespace App\Http\Livewire;

use App\Models\Landing;
use App\Models\Tentangkami;
use Livewire\Component;
use Livewire\WithFileUploads;

class Landingpage extends Component
{
    public $title, $deskripsi, $gambar;
    public $judulRiwayat, $deskripsiRiwayat, $gambarRiwayat;
    use WithFileUploads;

    public function riwayatEdit(Landing $data)
    {
        $this->judulRiwayat = $data->title;
        $this->deskripsiRiwayat = $data->deskripsi;
    }

    public function tentangEdit(Tentangkami $data)
    {
        $this->title = $data->judul;
        $this->deskripsi = $data->deskripsi;
    }
    public function tentangUpdate(Tentangkami $data)
    {
        $data->judul = $this->title;
        $data->deskripsi = $this->deskripsi;
        if ($this->gambar != null) {
            $data->gambar = $this->gambar->store('tentang');
        } else {
            $data->gambar = $data->gambar;
        }
        $data->status = $data->status;
        $data->save();

        $this->title = null;
        $this->deskripsi = null;
        $this->gambar = null;
    }
    public function updateRiwayat(Landing $data)
    {
        $data->title = $this->judulRiwayat;
        $data->deskripsi = $this->deskripsiRiwayat;
        if ($this->gambarRiwayat != null) {
            $data->image = $this->gambarRiwayat->store('riwayat');
        } else {
            $data->image = $data->image;
        }
        $this->judulRiwayat = null;
        $this->deskripsiRiwayat = null;
        $this->gambarRiwayat = null;
    }
    public function tentangHapus(Tentangkami $data)
    {
        unlink(public_path('storage/' . $data->gambar));
        $data->delete();
    }
    public function tentangAktif(Tentangkami $data)
    {
        $tentang = Tentangkami::latest()->where('status', 'aktif')->get();
        if ($tentang->count() > 0) {
            $tentang->status = 'tidak aktif';
            $tentang->save();
            $data->status = 'aktif';
            $data->save();
        } else {
            $data->status = 'aktif';
            $data->save();
        }
    }
    public function simpanTentang()
    {
        $data = new Tentangkami;
        $data->judul = $this->title;
        $data->deskripsi = $this->deskripsi;
        $data->gambar = $this->gambar->store('tentang');
        $data->status = 'tidak aktif';
        $data->save();

        $this->title = null;
        $this->deskripsi = null;
        $this->gambar = null;
    }
    public function simpanRiwayat()
    {
        $data = new Landing;
        $data->title = $this->judulRiwayat;
        $data->deskripsi = $this->deskripsiRiwayat;
        $data->image = $this->gambarRiwayat->store('riwayat');
        $data->save();

        $this->judulRiwayat = null;
        $this->deskripsiRiwayat = null;
        $this->imageRiwayat = null;
    }
    public function render()
    {
        return view('livewire.landingpage', [
            'tentang' => Tentangkami::all(),
            'dataRiwayat' => Landing::all()
        ])
            ->extends('component.template', ['title' => 'setting landing page'])
            ->section('konten');
    }
}
