<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alatin extends Model
{
    use HasFactory;
    protected $table = 'alatins';
    protected $guarded = ['id'];
}
