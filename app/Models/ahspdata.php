<?php

namespace App\Models;

use App\Models\Ahsp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ahspdata extends Model
{
    use HasFactory;
    protected $table = 'ahspdata';
    protected $guarded = ['id'];


    public function ahsp()
    {
        $this->belongsTo(Ahsp::class);
    }
}
