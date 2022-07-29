<?php

namespace App\Http\Livewire\Proyek;

use App\Models\Client;
use App\Models\Proyek;
use Livewire\Component;
use App\Models\GambarProyek;
use Livewire\WithFileUploads;

class DetailProyek extends Component
{
    use WithFileUploads;

    public $proyek;
    public $radio;
    public $deskripsi, $lain, $image;
    protected $listeners = ['gambar' => 'render'];


    public function deleteImage(GambarProyek $id)
    {
        unlink(public_path('storage/' . $id->gambar));
        $status = $id->delete();

        if ($status) {
            session()->flash('success', 'Aksi Berhasil Dilakukan');
        } else {
            session()->flash('error', 'Maaf Aksi Gagal dilakukan Dilakukan');
        }
        $this->emit('gambar');
    }

    public function addImage(Proyek $proyek)
    {
        $this->validate([
            'deskripsi' => 'required',
            'lain' => 'required'
        ]);
        $image = $this->image->store('ProyekImage');
        $gambar = new GambarProyek;
        $gambar->deskripsi = $this->deskripsi;
        $gambar->gambar = $image;
        $gambar->lain_lain = $this->lain;
        $gambar->proyek_id = $proyek->id;
        $gambar->save();

        $this->deskripsi = null;
        $this->image = null;
        $this->lain = null;
        $this->emit('gambar');
    }


    public function render()
    {

        return view('livewire.proyek.detail-proyek', [
            'proyek' => $this->proyek,
            'client' => $this->proyek->client,
            'gambar' => GambarProyek::latest()->where('proyek_id', $this->proyek->id)
        ])
            ->extends('component.template', ['title' => 'Detail Proyek'])
            ->section('konten');
    }
    public function mount(Proyek $id)
    {
        $this->proyek = $id;
    }
    public function status(Proyek $id)
    {
        $this->validate([
            'radio' => 'required'
        ]);
        $id->status = $this->radio;
        $id->save();
        $this->radio = null;
    }
}
