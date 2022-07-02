<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ahsp extends Model
{
    use HasFactory;
    protected $table = 'ahsp';
    protected $guarded = ['id'];


    public function ahspdata()
    {
        return $this->hasMany(ahspdata::class);
    }
}
