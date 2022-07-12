<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatans';
    protected $guarded = ['id'];

    public function pekerja()
    {
        return $this->hasMany(Pekerja::class);
    }
}
