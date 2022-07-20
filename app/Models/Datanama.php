<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datanama extends Model
{
    use HasFactory;
    protected $table = "datanamas";
    protected $guarded = ['id'];


    public function absen()
    {
        return $this->belongsTo(Absen::class, 'absens_id', 'id');
    }

    public function pekerja()
    {
        return $this->belongsTo(Pekerja::class, 'pekerja_id');
    }
    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id');
    }
}
