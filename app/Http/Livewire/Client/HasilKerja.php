<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class HasilKerja extends Component
{
    public function render()
    {
        return view('livewire.client.hasil-kerja')->extends('usertemplate', [
            'title' => 'PEKERJAAN'
        ])
            ->section('main');
    }
}
