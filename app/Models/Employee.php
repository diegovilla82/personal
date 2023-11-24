<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'city_id',
        'birthdate',
        'dni',
        'age',
        'telephont',
        'situation',
        'state_civil',
        'anti_date',
        'anti_year',
        'anti_month',
        'anti_day',
        'system_date',
        'antiquity',
        'nationality',
        'city_of_birth',
        'province_of_birth',
        'ley_6039_date',
        'anses_date',
        'anses_year',
        'anses_month',
        'anses_day',
        'vacation_days',
        'apartado',
        'ceic',
        'file_number',
        'updated_data',
        'active',
        'position_id',
        'degree_id',
        'email'
    ];

    public function user() : HasOne {
        return $this->hasOne(User::class, 'dni', 'dni');
    }
}
