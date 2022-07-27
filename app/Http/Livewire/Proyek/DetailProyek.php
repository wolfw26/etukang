<?php

namespace App\Http\Livewire\Proyek;

use App\Models\Client;
use App\Models\Proyek;
use Livewire\Component;

class DetailProyek extends Component
{
    public $proyek;
    public $radio;

    public function mount(Proyek $id)
    {
        $this->proyek = $id;
    }
    public function status(Proyek $id)
    {
        $this->validate([
            'radio' => 'required'
        ]);
        $id->status = $this->radio;
        $id->save();
        $this->radio = null;
    }
    public function render()
    {

        return view('livewire.proyek.detail-proyek', [
            'proyek' => $this->proyek,
            'client' => $this->proyek->client
        ])
            ->extends('component.template', ['title' => 'Detail Proyek'])
            ->section('konten');
    }
}
