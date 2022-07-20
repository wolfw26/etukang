<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $table = 'absens';
    protected $guarded = ['id'];


    public function proyek()
    {
        return $this->belongsTo(Proyek::class);
    }
    public function datanama()
    {
        return $this->hasMany(Datanama::class, 'absens_id', 'id');
    }
    public function lembur()
    {
        return $this->hasMany(Lembur::class, 'absens_id', 'id');
    }
}
