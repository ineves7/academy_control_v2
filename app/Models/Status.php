<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;
    
    protected $table = 'statuses';

    protected $fillable = [
        'status'
    ];

    public function danceclass(): HasMany
    {
        return $this->hasMany(Danceclass::class, 'status_id');
    }
    
}
