<?php

namespace App\Http\Livewire\Client\Rab;

use Livewire\Component;

class RabHome extends Component
{
    public function render()
    {
        return view('livewire.client.rab.rab-home')
            ->extends(
                'usertemplate',
                ['title' => 'Rab']
            )
            ->section('main');
    }
}
