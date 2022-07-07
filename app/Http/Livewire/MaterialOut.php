<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MaterialOut extends Component
{
    public function render()
    {
        return view('livewire.material-out')
            ->extends('component.template')
            ->section('konten');
    }
}
