<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use App\Models\Komplain as ModelsKomplain;
use App\Models\Proyek;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;

class Komplain extends Component
{
    use WithFileUploads;

    public $title, $deskripsi, $image;

    public function Tambah($id)
    {
        $proyek = Proyek::find($id);
        $client = $proyek->client_id;
        $images = $this->image->store('client');
        $komplain = new ModelsKomplain;
        $komplain->title = $this->title;
        $komplain->deskripsi = $this->deskripsi;
        $komplain->image = $images;
        $komplain->proyek_id = $id;
        $komplain->client_id = $client;
        $komplain->save();

        $this->title = null;
        $this->deskripsi = null;
        $this->image = null;
    }

    public function Hapus(ModelsKomplain $id)
    {
        unlink(public_path('storage/' . $id->image));
        $id->delete();
    }

    public function render()
    {
        $id_client = Client::where('users_id', Auth::id())->first();
        $id_proyek = Proyek::where('client_id', $id_client->id)->first();
        return view('livewire.client.komplain', [
            'proyek' => Proyek::where('client_id', $id_client->id)->first(),
            'data' => ModelsKomplain::where('proyek_id', $id_proyek->id)->get()
        ])->extends('usertemplate', [
            'title' => 'KOMPLAIN'
        ])
            ->section('main');
    }
}
