<?php

namespace App\Http\Livewire\Admin;

use App\Models\Alatrusak;
use App\Models\Alatsewa;
use App\Models\Client;
use App\Models\Material;
use App\Models\Proyek;
use App\Models\Pekerja;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $proyek = Proyek::all();
        $pekerja = Pekerja::all();
        $client = Client::all();
        $alatrusak = Alatrusak::where('status', 'proses');
        return view('livewire.admin.home', [
            'title' => 'HOME',
            'proyek' => $proyek->count(),
            'client' => $client->count(),
            'pekerja' => $pekerja,
            'material' => Material::all(),
            'sewa' => Alatsewa::all(),
            'rusak' => $alatrusak
        ])
            ->extends('component.template', ['title' => 'Halaman Admin'])
            ->section('konten');
    }
}
