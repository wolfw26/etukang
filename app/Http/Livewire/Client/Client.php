<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Client extends Component
{
    public function render()
    {
        return view('livewire.client.client')
            ->extends('usertemplate', [
                'title' => 'Home'
            ])
            ->section('main');
    }
}
