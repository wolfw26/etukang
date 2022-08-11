<?php

namespace App\Http\Livewire\Client;

use App\Models\Client as ModelsClient;
use App\Models\Pekerja;
use App\Models\Proyek;
use Livewire\Component;

class Client extends Component
{
    public function render()
    {
        return view('livewire.client.client', [
            'pekerja' => Pekerja::all(),
            'proyekselesai' => Proyek::where('status', 'SELESAI')->get(),
            'client' => ModelsClient::all()
        ])
            ->extends('usertemplate', [
                'title' => 'Home',

            ])
            ->section('main');
    }
}
