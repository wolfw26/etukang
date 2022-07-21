<?php

namespace App\Http\Livewire\Absen;

use App\Models\Absen;
use App\Models\Pekerja;
use App\Models\Proyek;
use Livewire\Component;

class Absensi extends Component
{
    public $pilihan, $tanggal, $proyek_id;
    public $absensi = '';

    public function back()
    {
        return redirect()->route('absensi');
    }
    public function absen($data)
    {
        $this->absensi = $data;
    }

    public function render()
    {

        return view('livewire.absen.absensi', [
            'pekerja' => Pekerja::all(),
            'proyek' => Proyek::latest()->get(),
            'absen' => Absen::latest()->get()
        ])
            ->extends('component.template', ['title' => 'Absen'])
            ->section('konten');
    }
}
