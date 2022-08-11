<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRab extends Model
{
    use HasFactory;
    protected $table = 'datarab';
    protected $guarded = ['id'];

    public function rab()
    {
        return $this->belongsTo(Rab::class);
    }
    public function rencana()
    {
        return $this->belongsTo(RencanaKerja::class, 'datarab_id');
    }
}
