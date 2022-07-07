<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MaterialIn extends Component
{
    public $materialin;

    public function render()
    {
        return view('livewire.material-in')
            ->extends('component.template')
            ->section('konten');
    }
}
