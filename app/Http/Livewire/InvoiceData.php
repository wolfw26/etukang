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
    protected $listeners = ['UpdateAlat' => 'UpdateAlat'];



    public function hapus($id)
    {
        $data = data_invoice::where('alatsewas_id', $id);
        $data->delete();
    }
    public function UpdateAlat(Alatsewa $alat)
    {

        $dataInvoice = data_invoice::first()->where('alatsewas_id', $alat->id)->get();
        $dataInvoice->deskipsi = $alat->deskripsi;
        $dataInvoice->harga = $alat->harga;
        $dataInvoice->jumlah = $alat->jumlah_hari;
        $dataInvoice->satuan = $alat->satuan;
        $dataInvoice->total = $alat->harga_total;
        $dataInvoice->invoices_id = $dataInvoice->invoices_id;
        $dataInvoice->alatsewas_id = $alat->id;
        $dataInvoice->save();

        $invoice = invoice::find($dataInvoice->invoices_id);
        $invoice->total = $dataInvoice->sum('total');
        $invoice->sisa = $dataInvoice->sum('total') - $invoice->dibayar;
        $invoice->save();
    }

    public function tambah()
    {
        $alat = Alatsewa::find($this->alatsewa);
        $data = new data_invoice;
        $data->deskipsi = $alat->deskripsi;
        $data->harga = $alat->harga;
        $data->jumlah = $alat->jumlah_hari;
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

        $alat->tempat_sewa = $this->invoice->dari;
        $alat->save();
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
    public function mount(invoice $id)
    {
        $this->invoice = $id;
    }
}
