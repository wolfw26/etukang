<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    use HasFactory;
    protected $table = 'konfirmasis';
    protected $guarded = ['id'];



    public function clientconfirm()
    {
        return $this->belongsTo(Client::class);
    }
    public function clientrab()
    {
        return $this->belongsTo(Rab::class);
    }
}
