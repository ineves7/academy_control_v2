<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Danceclass extends Model
{
    use HasFactory;

    protected $table = 'danceclasses';

    protected $fillable = [
        'rhythm_id',
        'name_danceclass',
        'modality',
        'status_danceclass',
        'level_danceclass',
        'week_day',
        'start_hour',
        'end_hour',
        'first-date',
        'end_date'

    ];



    public function rhythm(): BelongsTo
    {
        return $this->belongsTo(Rhythm::class, 'level_id');
    }

    public function peoples(): BelongsToMany
    {
        return $this->belongsToMany(People::class)->withPivot('payday', 'monthly_payment', 'people_id', 'danceclass_id');
    }


}
