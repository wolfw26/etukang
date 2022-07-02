<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ahspdata extends Model
{
    use HasFactory;
    protected $table = 'ahspdata';
    protected $guarded = ['id'];

    public function ahsp()
    {
        return $this->belongsTo(Ahs::class);
    }
}
