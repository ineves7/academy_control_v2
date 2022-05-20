<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hour extends Model
{
    use HasFactory;

    protected $table = 'hours';

    protected $fillable = [
        'hour'
    ];

    public function people(): HasMany
    {
        return $this->hasMany(People::class, 'hour_id');
    }
}


