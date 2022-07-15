<?php

namespace App\Http\Livewire;

use App\Models\Absen;
use App\Models\Datanama;
use App\Models\Pekerja;
use App\Models\Proyek;
use Livewire\Component;

class Absendata extends Component
{
    public $data;
    public $tanggal, $deskripsi;
    public $nama;

    public function tambahNama($id)
    {
        $pekerja = Pekerja::find($this->nama);
        $nama = new Datanama;
        $nama->nama = $pekerja->nama;
        $nama->pekerja_id = $pekerja->id;
        $nama->absens_id = $id;
        $nama->save();
    }
    public function tambahAbsen()
    {
        $absen = new Absen;
        $absen->tanggal = $this->tanggal;
        $absen->deskripsi = $this->deskripsi;
        $absen->proyek_id = $this->data;
        $absen->save();
    }
    public function render()
    {
        $datanama = Absen::with('namatukang')->get();
        return view('livewire.absendata', [
            'proyek' => Proyek::find($this->data),
            'pekerja' => Pekerja::all(),
            'datanama' => $datanama,
            'absen' => Absen::with('namatukang')->where('proyek_id', $this->data)->get()
        ]);
    }
}
