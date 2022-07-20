<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $table = 'stoks';
    protected $guarded = [];


    public function datamaterial()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }
}
