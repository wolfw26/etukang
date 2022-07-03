<?php

namespace App\Models;

use App\Models\AhspData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ahsp extends Model
{
    use HasFactory;
    protected $table = 'ahsp';
    protected $guarded = ['id'];

    public function dataahsp()
    {
        return $this->hasMany(AhspData::class);
    }
}
