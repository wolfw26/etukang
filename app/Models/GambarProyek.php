<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarProyek extends Model
{
    use HasFactory;
    protected $table = "gambar_proyeks";
    protected $guarded = ['id'];

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id', 'id');
    }
}
