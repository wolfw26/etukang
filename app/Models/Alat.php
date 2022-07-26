<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;
    protected $table = 'alats';
    protected $guarded = ['id'];


    public function masuk()
    {
        return $this->hasMany(Alatin::class, 'alats_id');
    }
    public function rusak()
    {
        return $this->hasMany(Alatrusak::class, 'alats_id');
    }
    public function sewa()
    {
        return $this->hasMany(Alatsewa::class, 'alats_id');
    }
}
