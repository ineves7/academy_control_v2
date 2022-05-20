<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genres';

    protected $fillable = [
        'genre',
    ];

    public function people(): HasMany
    {
        return $this->hasMany(People::class, 'genre_id');
    }
}
