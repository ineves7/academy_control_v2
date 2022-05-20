<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Danceclass extends Model
{
    use HasFactory;

    protected $table = 'danceclasses';

    protected $fillable = [
        'level_id',
        'weekday_id',
        'hour_id',
        'rhythm_id',
        'name_group',
    ];

    public function people(): HasMany
    {
        return $this->hasMany(People::class, 'danceclass_id');
    }
}
