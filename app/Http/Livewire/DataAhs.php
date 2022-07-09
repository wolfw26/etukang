<?php

namespace App\Http\Livewire;

use App\Models\Ahsp;
use Livewire\Component;
use App\Models\Material;

class DataAhs extends Component
{
    public $ahs;
    public $page;



    public function mount(Ahsp $ahsp)
    {
        $this->ahs = $ahsp;
    }
    public function render()
    {
        return view('livewire.data-ahs', [

            'ahsp' => $this->ahs,
            'data' => $this->ahs->dataahsp,
            'bahan' => Material::all()
        ])->extends('component.template', ['title' => 'Data AHSP'])
            ->section('konten');
    }
}
