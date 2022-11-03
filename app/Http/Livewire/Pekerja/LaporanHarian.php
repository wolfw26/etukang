<?php

namespace App\Http\Livewire\Pekerja;

use App\Models\Pekerja;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LaporanHarian extends Component
{
    public function render()
    {
        return view('livewire.pekerja.laporan-harian')
            ->extends('component.templatepekerja', [
                'title' => 'Rencana Kerja',
                'pekerja' => Pekerja::where('users_id', Auth::user()->id)->first()
            ])
            ->section('konten');;
    }
}
