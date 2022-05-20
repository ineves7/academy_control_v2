<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Weekday extends Model
{
    use HasFactory;

    protected $table = 'weekdays';

    protected $fillable = [
        'weekday'
    ];

    public function people(): HasMany
    {
        return $this->hasMany(Level::class, 'weekday_id');
    }
}
