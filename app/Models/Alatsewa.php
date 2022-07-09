<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alatsewa extends Model
{
    use HasFactory;
    protected $table = 'alatsewas';
    protected $guarded = ['id'];
}
