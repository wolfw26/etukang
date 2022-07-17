<?php

namespace App\Models;

use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';
    protected $guarded = ['id'];

    public function scopeCari($query, array $cari)
    {
        if (isset($cari['cari']) ? $cari['cari'] : false) {
            return $query->where('nama', 'like', '%' . request('cari') . '%')
                ->orwhere('alamat', 'like', '%' . request('cari') . '%');
        }
        // $query->when($cari['cari'] ?? false, function ($query, $cari) {
        //     return $query->where('nama_pekerja', 'like', '%' . $cari . '%')
        //         ->orwhere('alamat', 'like', '%' . $cari . '%');
        // });
    }

    public function konfirmasi()
    {
        return $this->hasMany(Konfirmasi::class, 'konfirmasi_id', 'id');
    }


    public function proyek()
    {
        return $this->belongsTo(Proyek::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
