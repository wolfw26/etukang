<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontraktor extends Model

{
    use HasFactory;



    public function Users()
    {
        return $this->belongsTo(User::class);
    }

    public function Proyek()
    {

        return $this->hasMany(Proyek::class);
    }
}
