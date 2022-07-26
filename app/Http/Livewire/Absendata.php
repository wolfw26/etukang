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
        $lembur = new Lembur;
        $lembur->nama = $pekerja->nama;
        $lembur->deskripsi = $id->deskripsi;
        $lembur->tanggal = $id->tanggal;
        $lembur->jumlah = $this->jamLembur;
        $lembur->absens_id = $id->id;
        $lembur->pekerja_id = $this->namaLembur;
        $lembur->save();

        $this->namaLembur = null;
        $this->jamLembur = null;
        $this->tanggal = null;
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

        $this->tanggal = null;
        $this->deskripsi = null;
    }
    public function hapuspekerja(Datanama $id)
    {
        $id->delete();
    }
    public function hapusLembur(Lembur $id)
    {
        $id->delete();
    }
    public function hapus(Absen $absen)
    {
        $datanama = Datanama::where('absens_id', $absen->id);
        $datanama->delete();
        $absen->delete();
    }
    public function render()
    {
        $datanama = Absen::with('datanama')->get();
        return view('livewire.absendata', [
            'proyek' => Proyek::find($this->data),
            'pekerja' => Pekerja::all(),
            'datanama' => $datanama,
            'absen' => Absen::with('datanama')->where('proyek_id', $this->data)->latest()->get()
        ]);
    }
}
