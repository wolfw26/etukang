<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StockMaterial extends Component
{
    public function render()
    {
        return view('livewire.stock-material', [
            'title' => 'Stock'
        ])
            ->extends('component.template')
            ->section('konten');
    }
}
