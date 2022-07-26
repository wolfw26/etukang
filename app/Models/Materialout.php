<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materialout extends Model
{
    use HasFactory;
    protected $table = 'materialouts';
    protected $guarded = ['id'];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
    public function proyek()
    {
        return $this->BelongsTo(Proyek::class, 'proyek_id');
    }
}
