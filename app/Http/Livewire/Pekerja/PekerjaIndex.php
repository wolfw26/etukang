<?php

namespace App\Http\Livewire\Pekerja;

use App\Models\Proyek;
use App\Models\Pekerja;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PekerjaIndex extends Component
{
    public $dataproyek, $datapekerja;
    public function mount()
    {
        $pekerja = Pekerja::where('users_id', Auth::user()->id)->first();
        $this->datapekerja = $pekerja;

        $this->dataproyek = Proyek::where('pekerja_id', $pekerja->id)
            ->where('status', 'DIKERJAKAN')->first();
    }
    public function render()
    {
        return view('livewire.pekerja.pekerja-index', [
            'proyek' => $this->dataproyek,
            'pekerja' => $this->datapekerja
        ])
            ->extends('component.templatepekerja', [
                'title' => 'Pekerja',
                'pekerja' => Pekerja::where('users_id', Auth::user()->id)->first()
            ])
            ->section('konten');
    }
}
