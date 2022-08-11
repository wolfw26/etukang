<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RencanaKerja extends Model
{
    use HasFactory;
    protected $table = 'rencana_kerjas';
    protected $guarded = ['id'];


    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id');
    }
    public function datarab()
    {
        return $this->belongsTo(DataRab::class, 'datarab_id');
    }
    public function rab()
    {
        return $this->belongsTo(Rab::class, 'rab_id');
    }
}
