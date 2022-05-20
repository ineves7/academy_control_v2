<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = [
        'people_id',
        'city',
        'district',
        'street',
        'number'
    ];

    public function people(): BelongsTo
    {
        return $this->belongsTo(People::class, 'people_id');
    }
}
