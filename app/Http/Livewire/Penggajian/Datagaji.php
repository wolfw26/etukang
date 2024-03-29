<?php

namespace App\Http\Livewire\Penggajian;

use App\Models\Absen;
use App\Models\Lembur;
use App\Models\Proyek;
use App\Models\Pekerja;
use Livewire\Component;
use App\Models\Datanama;
use App\Models\Penggajian;
use App\Http\Livewire\Absen\Absensi;

class Datagaji extends Component
{
    public $tglawal, $tglakhr, $nama, $namaPekerja, $jabatan, $gapok, $makan, $transport, $hari, $harikerja;
    public $lembur = 0, $upahLembur = 0, $bonus = 0, $potongan = 0, $total = 0, $dibayar = 0, $sisa = 0;
    public $absen;


    protected $rules = [
        'tglawal' => 'required',
        'tglakhr' => 'required',
        'namaPekerja' => 'required',
        'dibayar' => 'required',
    ];

    public function lunas(Penggajian $gaji)
    {
        $gaji->dibayar = $gaji->total;
        $gaji->sisa = 0;
        $gaji->save();
    }

    public function cari(Pekerja $pekerja)
    {
        $this->lembur = null;
        $this->upahLembur = null;
        $this->bonus = null;
        $this->potongan = null;
        $this->total = null;
        $this->dibayar = null;
        $this->sisa = null;

        $this->absen = Datanama::whereBetween('tanggal', [$this->tglawal, $this->tglakhr])
            ->where('pekerja_id', $pekerja->id)->get(); //menampilkan data tanggal sesuai pilihan
        $lembur = Lembur::whereBetween('tanggal', [$this->tglawal, $this->tglakhr])
            ->where('pekerja_id', $pekerja->id)->get(); //menampilkan data tanggal sesuai pilihan
        $this->nama = $pekerja->nama;
        $this->jabatan = $pekerja->jabatan->jabatan;
        $this->gapok = $pekerja->jabatan->gapok;
        $this->makan = $pekerja->jabatan->makan;
        $this->transport = $pekerja->jabatan->transport;
        $this->harikerja = $this->absen->count();
        // lembur
        $this->hari = $lembur->count();
        $this->lembur = $lembur->sum('jumlah');
        $this->upahLembur = $pekerja->lembur->count() * ($this->gapok / 8);
        $this->total =  $this->gapok * $this->absen->count() + ($this->lembur * $this->upahLembur) + $this->bonus - $this->potongan;
    }
    public function tambah()
    {
        $this->validate();
        $gapok = $this->gapok + $this->makan + $this->transport;
        $lembur = $this->lembur * $this->upahLembur;
        $total = $gapok * $this->absen->count() + ($this->lembur * $this->upahLembur) + $this->bonus;

        $gaji = new Penggajian;
        $gaji->tanggalAwal = $this->tglawal;
        $gaji->tanggalAkhir = $this->tglakhr;
        $gaji->tanggal = now()->format('Y-m-d');
        $gaji->nama_pekerja = $this->nama;
        $gaji->jabatan = $this->jabatan;
        $gaji->gapok = $this->gapok;
        $gaji->hari = $this->harikerja;
        $gaji->lembur = $this->lembur;
        $gaji->upah_lembur = $lembur;
        $gaji->transport = $this->transport;
        $gaji->makan = $this->makan;
        $gaji->bonus = $this->bonus;
        $gaji->potongan = $this->potongan;
        $gaji->total = $total - $this->potongan;
        $gaji->dibayar = $this->dibayar;
        $gaji->sisa = $total - $this->dibayar;
        $gaji->pekerja_id = $this->namaPekerja;
        $gaji->save();

        $this->absen = null;
    }

    public function hapus(Penggajian $data)
    {
        $data->delete();
    }
    public function render()
    {
        if ($this->namaPekerja != null && $this->absen != null) {
            $this->total =  ((int)$this->gapok + (int)$this->makan + (int)$this->transport) * (int)$this->absen->count() + ((int)$this->lembur * (int)$this->upahLembur) + (int)$this->bonus - (int)$this->potongan;
            $this->sisa = $this->total - $this->dibayar;
        }
        // if ($this->lembur != null) {
        //     $this->total =  $this->gapok * $this->absen->count() + ($this->lembur * $this->upahLembur) + $this->bonus - $this->potongan;
        //     $this->sisa = $this->total - $this->dibayar;
        // } else {
        //     $this->Lembur = null;
        // }
        // if ($this->upahLembur != null) {
        //     $this->total =  $this->gapok * $this->absen->count() + ($this->lembur * $this->upahLembur) + $this->bonus - $this->potongan;
        //     $this->sisa = $this->total - $this->dibayar;
        // } else {
        //     $this->upahLembur = null;
        // }
        // if ($this->bonus != null) {
        //     $this->total =  $this->gapok * $this->absen->count() + ($this->lembur * $this->upahLembur) + $this->bonus - $this->potongan;
        //     $this->sisa = $this->total - $this->dibayar;
        // } else {
        //     $this->bonus = null;
        // }
        // if ($this->potongan != null) {
        //     $this->total =  $this->gapok * $this->absen->count() + ($this->lembur * $this->upahLembur) + $this->bonus - $this->potongan;
        //     $this->sisa = $this->total - $this->dibayar;
        // } else {
        //     $this->potongan = 0;
        // }

        // ($this->lembur != null && $this->upahLembur != null && $this->bonus != null && $this->potongan != null)
        // if ($this->namaPekerja != 0) {
        //     $absen = Absen::whereBetween('tanggal', [$this->tglawal, $this->tglakhr])->get();
        //     foreach ($absen as $absens) {
        //         $coba = $absens->datanama;
        //     }
        // } else {
        //     $coba = 0;
        // }


        // $absen = Absen::all()->whereBetween('tanggal', [$this->tglawal, $this->tglakhr]);
        // foreach ($absen as $b) {
        //     $absen = $b->first();
        // }

        // $absen = Absen::all();
        // foreach ($absen as $a) {
        //     dd($a->tanggal, $a->datanama->count());
        // }
        $data = Pekerja::all();
        $proyek = Proyek::all();
        $penggajian = Penggajian::all();
        // foreach ($proyek as $a) {
        //     foreach ($a->absen as $nama) {
        //         foreach ($nama->datanama as $dm) {
        //             dd($dm->where('pekerja_id', '1')->count());
        //         }
        //     }
        // }
        // foreach ($data as $d) {
        //     foreach ($d->datanama as $dn) {
        //         dd($dn->absen->all());
        //     }
        // }
        return view('livewire.penggajian.datagaji', [
            'pekerja' => $data,
            'proyek' => $proyek,
            'penggajian' => $penggajian
        ])
            ->extends('component.template', ['title' => 'Data Gaji'])
            ->section('konten');
    }
}
