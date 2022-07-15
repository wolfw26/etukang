<?php

namespace App\Http\Livewire;

use App\Models\Rab;
use App\Models\Client;
use Livewire\Component;

class Konfirmasi extends Component
{
    public $rab, $client;

    public function mount(Client $client, Rab $rab)
    {
        $this->rab = $rab;
        $this->client = $client;
    }
    public function render()
    {

        return view('livewire.konfirmasi')
            ->extends('component.template', ['title' => 'konfirmasi'])
            ->section('konten');
    }
}
