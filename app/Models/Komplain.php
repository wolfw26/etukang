<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komplain extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'komplains';

    public function Client()
    {
        return $this->hasMany(Client::class);
    }
}
