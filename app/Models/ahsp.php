<?php

namespace App\Models;

use App\Models\Ahspdata;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ahsp extends Model
{
    use HasFactory;
    protected $table = 'ahsp';
    protected $guarded = ['id'];


    public function data()
    {
        $this->hasMany(Ahspdata::class);
    }
}
