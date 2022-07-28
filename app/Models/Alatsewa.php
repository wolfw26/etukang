<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alatsewa extends Model
{
    use HasFactory;
    protected $table = 'alatsewas';
    protected $guarded = ['id'];


    public function invoiceAlat()
    {
        return $this->hasMany(data_invoice::class, 'alatsewas_id', 'id');
    }
}
