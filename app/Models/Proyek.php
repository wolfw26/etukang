<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $table = 'proyek';
    protected $guarded = ['id'];

    public function Material()
    {
        return $this->belongsTo(Material::class);
    }
    public function tukang()
    {
        return $this->belongsTo(tukang::class);
    }
    public function dataproyek()
    {
        return $this->hasMany(DataProyek::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
