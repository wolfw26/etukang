<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MaterialIndex extends Component
{
    public $page;
    public function all()
    {
        $this->page = 'all';
    }
    public function masuk()
    {
        $this->page = 'masuk';
    }
    public function keluar()
    {
        $this->page = 'keluar';
    }
    public function render()
    {
        return view('livewire.material-index')
            ->extends('component.template')
            ->section('konten');
    }
}
