<?php

namespace App\Http\Livewire;

use App\Models\Pekerja;
use App\Models\User;
use Livewire\Component;

class Tukang extends Component
{
    public $username, $email, $password, $idpekerja;

    public function tambah()
    {
        $user = new User;
        $user->name = $this->username;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();

        $id = $user->id;
        $pekerja = Pekerja::find($this->idpekerja);
        $pekerja->users_id = $id;
        $pekerja->save();

        $this->username = null;
        $this->password = null;
        $this->email = null;
        $this->idpekerja = null;
    }
    public function render()
    {
        $pekerja = Pekerja::all();
        return view('livewire.tukang', [
            'pekerja' => $pekerja
        ])
            ->extends('component.template', ['title' => 'Tukang'])
            ->section('konten');
    }
}
