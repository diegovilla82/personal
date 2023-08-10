<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LicenciaUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'licencia_id',
        'days',
        'status',
        'year'
    ];


    public function usuario():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function licencia()
    {
        return $this->belongsTo(Licencia::class);
    }
}
