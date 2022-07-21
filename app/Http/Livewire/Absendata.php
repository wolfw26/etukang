<?php

namespace App\Http\Livewire;

use App\Models\Absen;
use App\Models\Datanama;
use App\Models\Lembur;
use App\Models\Pekerja;
use App\Models\Proyek;
use Livewire\Component;

class Absendata extends Component
{
    public $data;
    public $tanggal, $deskripsi;
    public $nama;
    public $namaLembur, $jamLembur;

    public function tambahLembur(Absen $id, $proyek)
    {
        $pekerja = Pekerja::find($this->namaLembur);
        $nama = new Lembur;
        $nama->nama = $pekerja->nama;
        $nama->deskripsi = $id->deskripsi;
        $nama->tanggal = $id->tanggal;
        $nama->jumlah = $this->jamLembur;
        $nama->absens_id = $id->id;
        $nama->pekerja_id = $proyek;
        $nama->save();
    }
    public function tambahNama(Absen $id, $proyek)
    {
        $pekerja = Pekerja::find($this->nama);
        $nama = new Datanama;
        $nama->nama = $pekerja->nama;
        $nama->tanggal = $id->tanggal;
        $nama->pekerja_id = $pekerja->id;
        $nama->absens_id = $id->id;
        $nama->proyek_id = $proyek;
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
    public function hapuspekerja(Datanama $id)
    {
        $id->delete();
    }
    public function hapusLembur(Lembur $id)
    {
        $id->delete();
    }
    public function render()
    {
        $datanama = Absen::with('datanama')->get();
        return view('livewire.absendata', [
            'proyek' => Proyek::find($this->data),
            'pekerja' => Pekerja::all(),
            'datanama' => $datanama,
            'absen' => Absen::with('datanama')->where('proyek_id', $this->data)->get()
        ]);
    }
}
