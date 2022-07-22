<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Pekerja;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Tukang extends Component
{
    public $username, $email, $password, $idpekerja;

    public function tambah()
    {
        $user = new User;
        $user->name = $this->username;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->rule = "ketua";
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

    public function hapus(User $user)
    {
        $user->delete();
    }
    public function render()
    {
        $user = User::where('rule', 'ketua')->get();
        if ($user->count() > 0) {
            $data = User::where('rule', 'ketua')->get();
        } else {
            $data = [];
        }
        $pekerja = Pekerja::all();
        return view('livewire.tukang', [
            'pekerja' => $pekerja,
            'user' => $data
        ])
            ->extends('component.template', ['title' => 'Tukang'])
            ->section('konten');
    }
}
