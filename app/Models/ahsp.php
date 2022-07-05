<?php

namespace App\Models;

use App\Models\AhspData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ahsp extends Model
{
    use HasFactory;
    protected $table = 'ahsp';
    protected $guarded = ['id'];

    public function scopeCari($query, array $cari)
    {
        if (isset($cari['cari']) ? $cari['cari'] : false) {
            return $query->where('kode_ahs', 'like', '%' . request('cari') . '%')
                ->orwhere('nama_ahs', 'like', '%' . request('cari') . '%')
                ->orwhere('kategori', 'like', '%' . request('cari') . '%');
        }
        $query->when($cari['cari'] ?? false, function ($query, $cari) {
            return $query->where('nama_proyek', 'like', '%' . $cari . '%')
                ->orwhere('alamat', 'like', '%' . $cari . '%');
        });
    }

    public function dataahsp()
    {
        return $this->hasMany(AhspData::class, 'ahsp_id');
    }
}
