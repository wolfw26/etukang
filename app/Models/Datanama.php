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
}
