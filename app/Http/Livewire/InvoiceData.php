<?php

namespace App\Http\Livewire;

use App\Models\Alatsewa;
use App\Models\data_invoice;
use App\Models\invoice;
use Livewire\Component;

class InvoiceData extends Component
{
    public $invoice;
    public  $alatsewa;

    public function mount(invoice $id)
    {
        $this->invoice = $id;
    }

    public function tambah()
    {
        $alat = Alatsewa::find($this->alatsewa);
        $data = new data_invoice;
        $data->deskipsi = $alat->deskripsi;
        $data->harga = $alat->harga;
        $data->jumlah = $alat->jumlah;
        $data->satuan = $alat->satuan;
        $data->total = $alat->harga_total;
        $data->invoices_id = $this->invoice->id;
        $data->alatsewas_id = $alat->id;
        $data->save();

        $datainvoice = data_invoice::where('invoices_id', $this->invoice->id)->get();
        $invoice = $this->invoice;
        $invoice->total = $datainvoice->sum('total');
        $invoice->sisa =   $datainvoice->sum('total') - $invoice->dibayar;
        $invoice->save();
    }
    public function render()
    {
        return view('livewire.invoice-data', [
            'alat' => Alatsewa::latest()->get(),
            'data' => data_invoice::latest()->where('invoices_id', $this->invoice->id)->get()
        ])
            ->extends('component.template', ['title' => 'invoice'])
            ->section('konten');
    }
}
