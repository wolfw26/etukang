<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material_in extends Model
{
    use HasFactory;
    protected $table = 'material_ins';
    protected $guarded = ['id'];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
