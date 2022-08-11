<?php

namespace App\Http\Livewire;

use App\Models\Alatsewa;
use App\Models\data_invoice;
use App\Models\invoice;
use Livewire\Component;
use Livewire\WithFileUploads;

class InvoiceSewa extends Component
{
    use WithFileUploads;

    public $kode, $deskripsi, $tglinvoice, $dari, $tgljapo, $img_invoice;
    public $alat;




    public function tambahAlat(invoice $id)
    {
        $alat = Alatsewa::find($this->alat);
        $data = new data_invoice;
        $data->deskipsi = $alat->deskripsi;
        $data->harga = $alat->harga;
        $data->jumlah = $alat->jumlah_hari;
        $data->satuan = $alat->satuan;
        $data->total = $alat->harga_total;
        $data->invoices_id = $id->id;
        $data->alatsewas_id = $alat->id;
        $data->save();

        $total = data_invoice::where('invoices_id', $id->id);
        $id->total = $total->sum('total');
        $id->save();
        $this->alat = null;
    }

    public function buat()
    {
        $this->validate([
            'kode' => 'required',
            'img_invoice' => 'image|max:1024', // 1MB Max
            'deskripsi' => 'required',
            'tglinvoice' => 'required',
            'tgljapo' => 'required',
            'dari' => 'required'

        ]);
        $invoice = new invoice;
        $invoice->kode = $this->kode;
        $invoice->deskripsi = $this->deskripsi;
        $invoice->dari = $this->dari;
        $invoice->tanggal_invoice = $this->tglinvoice;
        $invoice->tanggal_japo = $this->tgljapo;
        $invoice->image_invoice = $this->img_invoice->store('invoice');
        $status = $invoice->save();

        if ($status) {
            request()->session()->flash('success', 'Aksi Berhasil Dilakukan');
        } else {
            request()->session()->flash('error', 'Maaf Aksi Gagal dilakukan Dilakukan');
        }
    }

    public function hapus(invoice $invoice)
    {
        unlink(public_path('storage/' . $invoice->image_invoice));
        $data = data_invoice::where('invoices_id', $invoice->id);
        $data->delete();
        $invoice->delete();
    }
    public function unduh(invoice $image)
    {
        return response()->download(public_path('storage/' . $image->image_invoice));
    }

    public function render()
    {
        return view('livewire.invoice-sewa', [
            'data' => invoice::latest()->get(),
            'sewa' => Alatsewa::latest()->get()
        ]);
    }
}
