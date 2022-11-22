<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedules';

    protected $fillable = [
        'danceclass_id',
        'week_day_id',
        'start_time_id',
        'end_time_id'
    ];

    public function danceclass(): HasMany
    {
        return $this->belongsTo(Danceclass::class, 'danceclass_id');
    }

    public function week_days(): HasMany
    {
        return $this->hasMany(week_days::class, 'danceclass_id');
    }

    public function start_time(): HasMany
    {
        return $this->belongsTo(Hour::class, 'danceclass_id');
    }

    public function end_time(): HasMany
    {
        return $this->belongsTo(end_time::class, 'danceclass_id');
    }


}
