<?php

namespace App\Http\Livewire\Absen;

use App\Models\Pekerja;
use App\Models\Proyek;
use Livewire\Component;

class Absensi extends Component
{
    public $pilihan, $tanggal, $proyek_id;

    public function render()
    {
        return view('livewire.absen.absensi', [
            'pekerja' => Pekerja::all(),
            'proyek' => Proyek::all()
        ])
            ->extends('component.template', ['title' => 'Absen'])
            ->section('konten');
    }
}
