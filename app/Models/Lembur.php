<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    use HasFactory;
    protected $table = 'lemburs';
    protected $guarded = ['id'];


    public function absen()
    {
        return $this->belongsTo(Absen::class, 'absens_id', 'id');
    }
    public function pekerja()
    {
        return $this->belongsTo(Pekerja::class, 'pekerja_id', 'id');
    }
}
