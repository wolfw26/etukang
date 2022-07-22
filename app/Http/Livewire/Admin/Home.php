<?php

namespace App\Http\Livewire\Admin;

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
        return view('livewire.admin.home', [
            'title' => 'HOME',
            'proyek' => $proyek->count(),
            'client' => $client->count(),
            'pekerja' => $pekerja,
            'material' => Material::all()
        ])
            ->extends('component.template', ['title' => 'Halaman Admin'])
            ->section('konten');
    }
}
