<?php

namespace App\Http\Livewire\Cetak;

use App\Models\invoice as ModelsInvoice;
use Livewire\Component;

class Invoice extends Component
{
    public $data;
    public function mount($invoice)
    {
        $this->data = ModelsInvoice::find($invoice);
    }
    public function render()
    {
        return view('livewire.cetak.invoice', [
            'invoice' => $this->data
        ])
            ->extends('livewire.Cetak.template', [
                'judul' => 'INVOICE',
                'tanggal' => '',
            ])
            ->section('cetak');
    }
}
