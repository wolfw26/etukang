<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use App\Models\Proyek;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Proyekadd extends Component
{
    public $nama_proyek, $jenis_proyek, $jabatan, $alamat, $luas_tanah, $panjang_rumah, $lebar_rumah, $satuan;
    public $idclient;

    public function tambah()
    {
        $proyek = new Proyek;

        $proyek->nama_proyek = $this->nama_proyek;
        $proyek->jenis_proyek = $this->jenis_proyek;
        $proyek->alamat = $this->alamat;
        $proyek->luas_tanah = $this->luas_tanah;
        $proyek->panjang_rumah = $this->panjang_rumah;
        $proyek->lebar_rumah = $this->lebar_rumah;
        $proyek->satuan = $this->satuan;
        $proyek->status = 'perencanaan';
        $proyek->pekerja_id = 0;
        $proyek->client_id = $this->idclient->id;
        $proyek->save();

        $this->nama_proyek = null;
        $this->jenis_proyek = null;
        $this->alamat = null;
        $this->luas_tanah = null;
        $this->panjang_rumah = null;
        $this->lebar_rumah = null;
        $this->satuan = null;
    }
    public function render()
    {
        $this->idclient = Client::where('users_id', Auth::id())->first(); //Data Client

        return view('livewire.client.proyekadd', [
            'proyek' => Proyek::where('client_id', $this->idclient->id)->get()
        ])
            ->extends('usertemplate', [
                'title' => 'Proyek',

            ])
            ->section('main');
    }
}
