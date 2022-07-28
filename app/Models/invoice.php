<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $guarded = ['id'];

    public function datainvoice()
    {
        return $this->hasMany(data_invoice::class, 'invoices_id');
    }
}
