<?php

namespace App\Http\Livewire\Penggajian;

use App\Models\Absen;
use App\Models\Proyek;
use App\Models\Pekerja;
use Livewire\Component;
use App\Http\Livewire\Absen\Absensi;

class Datagaji extends Component
{
    public function render()
    {
        // $absen = Absen::all();
        // foreach ($absen as $a) {
        //     dd($a->tanggal, $a->datanama->count());
        // }
        $data = Pekerja::all();
        $proyek = Proyek::all();
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
            'proyek' => $proyek
        ])
            ->extends('component.template', ['title' => 'Data Gaji'])
            ->section('konten');
    }
}
