<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $table = 'material';
    protected $guarded = ['id'];


    public function materialin()
    {
        $this->hasMany(Material_in::class, 'material_id');
    }
    public function materialout()
    {
        $this->hasMany(Materialout::class, 'material_id');
    }
    public function stok()
    {
        $this->hasMany(Stok::class, 'material_id');
    }
}
