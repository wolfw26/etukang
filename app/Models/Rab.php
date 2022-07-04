<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rab extends Model
{
    use HasFactory;
    protected $table = 'rab';
    protected $guarded = ['id'];

    public function datarab()
    {
        return $this->hasMany(DataRab::class);
    }

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id', 'id');
    }
}
