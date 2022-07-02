<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rab extends Model
{
    use HasFactory;
    protected $table = 'rab';
    protected $guarded = ['id'];

    public function datarab()
    {
        $this->hasMany(DataRab::class);
    }
}
