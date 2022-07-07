<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materialout extends Model
{
    use HasFactory;
    protected $table = 'materialouts';
    protected $guarded = ['id'];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
