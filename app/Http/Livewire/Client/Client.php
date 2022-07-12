<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Client extends Component
{
    public function render()
    {
        return view('livewire.Client.Client')
            ->extends('usertemplate', [
                'title' => 'Home'
            ])
            ->section('main');
    }
}
