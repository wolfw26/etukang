<?php

namespace App\Http\Livewire\Client\Rab;

use App\Models\Client;
use App\Models\Proyek;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class RabHome extends Component
{
    public function render()
    {
        $data = Client::where('users_id', Auth::user()->id)->first();
        $proyek = Proyek::where('client_id', 1)->first();
        dd($proyek);
        return view('livewire.client.rab.rab-home')
            ->extends(
                'usertemplate',
                ['title' => 'Rab']
            )
            ->section('main');
    }
}
