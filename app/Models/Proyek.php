<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $table = 'proyek';
    protected $guarded = ['id'];

    public function scopeCari($query, array $cari)
    {
        if (isset($cari['cari']) ? $cari['cari'] : false) {
            return $query->where('nama_proyek', 'like', '%' . request('cari') . '%')
                ->orwhere('alamat', 'like', '%' . request('cari') . '%');
        }
        $query->when($cari['cari'] ?? false, function ($query, $cari) {
            return $query->where('nama_proyek', 'like', '%' . $cari . '%')
                ->orwhere('alamat', 'like', '%' . $cari . '%');
        });
    }

    public function tukang()
    {
        return $this->belongsTo(Tukang::class);
    }
    public function dataproyek()
    {
        return $this->hasMany(DataProyek::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function rab()
    {
        return $this->belongsTo(Rab::class);
    }
}
