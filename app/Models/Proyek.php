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

    public function pekerja()
    {
        return $this->belongsTo(Pekerja::class, 'pekerja_id');
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
        return $this->belongsTo(Rab::class, 'proyek_id', 'id');
    }
    public function absen()
    {
        return $this->hasMany(Absen::class, 'proyek_id');
    }
    public function datanama()
    {
        return $this->hasMany(Datanama::class, 'proyek_id');
    }
    public function gambar()
    {
        return $this->hasMany(GambarProyek::class, 'proyek_id', 'id');
    }
    public function material()
    {
        return $this->hasMany(Materialout::class, 'proyek_id');
    }
    public function rencanakerja()
    {
        return $this->hasMany(RencanaKerja::class, 'proyek_id');
    }
    public function materialTerpakai()
    {
        return $this->hasMany(Materialout::class, 'proyek_id');
    }
}
