<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ahs extends Model
{
    use HasFactory;
    protected $table = 'ahs';
    protected $guarded = [];


    public function rab()
    {
        return $this->belongsTo(Rab::class);
    }

    public function dataahs()
    {
        return $this->hasMany(DataAhs::class);
    }
}
