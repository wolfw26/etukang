<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $table = 'proyek';
    protected $guarded = ['id'];

    public function Kontraktor()
    {
        return $this->belongsTo(Kontraktor::class);
    }
    public function tukang()
    {
        return $this->belongsTo(tukang::class);
    }
    public function dataproyek()
    {
        return $this->belongsTo(DataProyek::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
