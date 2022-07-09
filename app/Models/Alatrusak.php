<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alatrusak extends Model
{
    use HasFactory;
    protected $table = 'alatrusaks';
    protected $guarded = ['id'];
}
