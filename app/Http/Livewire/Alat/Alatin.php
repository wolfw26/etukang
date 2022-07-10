<?php

namespace App\Http\Livewire\Alat;

use Livewire\Component;



class Alatin extends Component
{
    public function render()
    {
        return view('livewire.alat.alatin')

            ->extends('component.template', ['title' => 'Alat'])
            ->section('konten');
    }
}
