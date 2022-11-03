<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;
    protected $table = 'supliers';
    protected $guarded = ['id'];


    public function material()
    {
        $this->hasMany(Material::class, 'id');
    }
    public function materialin()
    {
        $this->hasMany(Material_in::class, 'suplier_id', 'id');
    }
}
