<?php

namespace App\Http\Livewire\Pekerja;

use App\Models\Proyek;
use App\Models\Pekerja;
use Livewire\Component;
use App\Models\Komplain as modelKomplain;
use Illuminate\Support\Facades\Auth;

class Komplain extends Component
{
    public $dataproyek;
    public function mount()
    {
        $pekerja = Pekerja::where('users_id', Auth::user()->id)->first();
        $this->dataproyek = Proyek::where('pekerja_id', $pekerja->id)
            ->where('status', 'DIKERJAKAN')->first();
    }
    public function render()
    {
        $id_proyek = $this->dataproyek->id;
        return view('livewire.pekerja.komplain', [
            'data' => modelKomplain::where('proyek_id', $id_proyek)->paginate(5)
        ])->extends('component.templatepekerja', [
            'title' => 'Rencana Kerja',
            'pekerja' => Pekerja::where('users_id', Auth::user()->id)->first()
        ])
            ->section('konten');
    }
}
