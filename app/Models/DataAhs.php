<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAhs extends Model
{
    use HasFactory;
    protected $table = 'dataahs';
    protected $guarded = ['id'];


    public function ahs()
    {
        return $this->belongsTo(Rab::class);
    }
}
