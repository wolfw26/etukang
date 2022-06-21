<?php

namespace App\Models;

use App\Models\DataProyek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tukang extends Model
{
    use HasFactory;
    protected $table = 'tukang';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function proyek()
    {
        return $this->hasMany(Proyek::class);
    }

    public function pekerja()
    {
        return $this->hasMany(Pekerja::class);
    }
}
