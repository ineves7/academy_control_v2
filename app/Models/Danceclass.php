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
        'name_danceclass',
        'modality_id',
        'level_id',
        'rhythm_id',
        'status_id'
    ];


    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'danceclass_id');
    }

    public function modality(): BelongsTo
    {
        return $this->belongsTo(Modality::class);
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    public function rhythm(): BelongsTo
    {
        return $this->belongsTo(Rhythm::class, 'level_id');
    }

    public function peoples(): BelongsToMany
    {
        return $this->belongsToMany(People::class)->withPivot('payday', 'monthly_payment', 'people_id', 'danceclass_id');
    }


}
