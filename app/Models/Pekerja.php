<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;
    protected $table = 'pekerja';
    protected $guarded = ['id'];


    public function scopeCari($query, array $cari)
    {
        if (isset($cari['cari']) ? $cari['cari'] : false) {
            return $query->where('nama_pekerja', 'like', '%' . request('cari') . '%')
                ->orwhere('alamat', 'like', '%' . request('cari') . '%');
        }
        $query->when($cari['cari'] ?? false, function ($query, $cari) {
            return $query->where('nama_pekerja', 'like', '%' . $cari . '%')
                ->orwhere('alamat', 'like', '%' . $cari . '%');
        });
    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function penggajian()
    {
        return $this->hasMany(Penggajian::class);
    }
    public function proyeks()
    {
        return $this->belongsToThrough(Penggajian::class);
    }
}
