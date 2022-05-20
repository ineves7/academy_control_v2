<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modality extends Model
{
    use HasFactory;

    protected $table = 'modalities';

    protected $fillable = [
        'modality'
    ];

    public function people(): HasMany
    {
        return $this->hasMany(People::class, 'modality_id');
    }
}
