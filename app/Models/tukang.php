<?php

namespace App\Models;

use App\Models\DataProyek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tukang extends Model
{
    use HasFactory;
    protected $table = 'tukang';
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function proyek()
    {
        return $this->hasMany(Proyek::class);
    }

    public function pekerja()
    {
        return $this->hasMany(Pekerja::class);
    }
}
