<?php

namespace App\Http\Livewire\Pekerja;

use App\Models\Pekerja;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PekerjaIndex extends Component
{
    public $coba;
    public function render()
    {
        return view('livewire.pekerja.pekerja-index')
            ->extends('component.templatepekerja', [
                'title' => 'Pekerja',
                'pekerja' => Pekerja::where('users_id', Auth::user()->id)->first()
            ])
            ->section('konten');
    }
}
