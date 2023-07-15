<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Livewire\WithFileUploads;

class Monitoring extends Component
{
    use WithFileUploads;

    public $photo;
    public function render()
    {
        return view('livewire.client.monitoring')->extends('usertemplate', [
            'title' => 'PEKERJAAN'
        ])
            ->section('main');
    }
}
