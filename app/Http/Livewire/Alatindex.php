<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alatindex extends Component
{
    public function render()
    {
        return view('livewire.alatindex')
            ->extends('component.template', ['title' => 'Alat'])
            ->section('konten');
    }
}
