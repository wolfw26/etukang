<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rab extends Model
{
    use HasFactory;
    protected $table = 'rab';
    protected $guarded = ['id'];

    public function datarab()
    {
        return $this->hasMany(DataRab::class, 'rab_id');
    }

    public function proyekrab()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id', 'id');
    }
    public function konfirmasi()
    {
        return $this->hasMany(Konfirmasi::class, 'konfirmasi_id', 'id');
    }
}
