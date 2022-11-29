<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanceclassPeople extends Model
{
    use HasFactory;

    protected $table = 'danceclass_people';

    protected $fillable = [

        'danceclass_id',
        'people_id',
        'monthly_payment',
        'payday',
        'person_type'

    ];
}

