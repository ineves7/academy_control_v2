<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week_day extends Model
{
    use HasFactory;

    protected $table = 'week_days';

    protected $fillable = [
        'week_day'
    ];

}
