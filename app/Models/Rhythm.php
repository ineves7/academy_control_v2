<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rhythm extends Model
{
    use HasFactory;

    protected $table = 'rhythms';

    protected $fillable = [
        'rhythm'
    ];

    public function danceclasses(): HasMany
    {
        return $this->hasMany(Danceclass::class, 'level_id');
    }

}
