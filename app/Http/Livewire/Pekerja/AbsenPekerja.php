<?php

namespace App\Http\Livewire\Pekerja;

use App\Models\Absen;
use App\Models\Lembur;
use App\Models\Proyek;
use App\Models\Pekerja;
use Livewire\Component;
use App\Models\Datanama;
use Illuminate\Support\Facades\Auth;

class AbsenPekerja extends Component
{
    public $proyek;
    public $tanggal, $deskripsi;
    public $namaLembur, $jamLembur;
    public $nama;

    public function mount()
    {
        $pekerja = Pekerja::where('users_id', Auth::user()->id)->first();
        $this->proyek = Proyek::where('pekerja_id', $pekerja->id)
            ->where('status', 'DIKERJAKAN')->first();
    }
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
    public function tambahAbsen()
    {
        $absen = new Absen;
        $absen->tanggal = $this->tanggal;
        $absen->deskripsi = $this->deskripsi;
        $absen->proyek_id = $this->proyek->id;
        $absen->save();

        $this->tanggal = null;
        $this->deskripsi = null;
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

        if ($this->proyek && $this->proyek->count() > 0) {
            $absen = Absen::where('proyek_id', $this->proyek->id)->get();
        } else {
            $absen = [];
        }
        return view('livewire.pekerja.absen-pekerja', [
            'dataProyek' => $this->proyek,
            'absen' => $absen,
            'pekerja' => Pekerja::all()
        ])
            ->extends('component.templatepekerja', [
                'title' => 'Absen',
                'pekerja' => Pekerja::where('users_id', Auth::user()->id)->first()
            ])
            ->section('konten');
    }
}
