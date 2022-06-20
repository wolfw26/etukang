<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tukang extends Model
{
    use HasFactory;
    protected $table = 'tukang';
    protected $guarded = ['id'];


    public function pekerja()
    {
        return $this->belongsTo(Pekerja::class);
    }

    public function proyek()
    {
        return $this->hasMany(Proyek::class);
    }
}
