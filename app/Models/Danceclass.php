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
        'level_id',
        'rhythm_id',
        'name_danceclass',
        'private_class'
    ];


    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'danceclass_id');
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function people(): BelongsToMany
    {
        return $this->belongsToMany(People::class)->withPivot('monthly_payment', 'payday');
    }


}
