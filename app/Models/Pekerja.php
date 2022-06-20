<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;
    protected $table = 'pekerja';
    protected $guarded = ['id'];


    public function tukang()
    {
        return $this->belongsTo(Tukang::class);
    }
    public function penggajian()
    {
        return $this->hasMany(Penggajian::class);
    }
}
