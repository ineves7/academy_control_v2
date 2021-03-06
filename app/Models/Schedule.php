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
        'week_day',
        'start_time',
        'end_time'
    ];

    public function danceclass(): BelongsTo
    {
        return $this->belongsTo(Danceclass::class, 'danceclass_id');
    }
}
