<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    use HasFactory;

    protected $table = 'levels';

    protected $fillable = [
        'level'
    ];

    public function peoples(): HasMany
    {
        return $this->hasMany(People::class, 'level_id');
    }

    public function danceclasses(): HasMany
    {
        return $this->hasMany(Danceclass::class, 'level_id');
    }
}
