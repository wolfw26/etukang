<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_invoice extends Model
{
    use HasFactory;
    protected $table = 'data_invoices';
    protected $guarded = ['id'];

    public function invoice()
    {
        return $this->belongsTo(invoice::class, 'invoices_id');
    }
    public function alatsewa()
    {
        return $this->belongsTo(Alatsewa::class, 'alatsewas_id', 'id');
    }
}
