<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class People extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'peoples';

    protected $fillable = [
        'status_id',
        'modality_id',
        'danceclass_id',
        'genre_id',
        'level_id',
        'name',
        'birthdate',
        'phone',
        'monthly_payment',
        'payday'
    ];

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function modality(): BelongsTo
    {
        return $this->belongsTo(Modality::class, 'modality_id');
    }

    public function danceclass(): BelongsTo
    {
        return $this->belongsTo(Danceclass::class, 'danceclass_id');
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
    
    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'people_id');
    }

    public function schedule(): HasMany
    {
        return $this->hasMany(Schedule::class, 'people_id');
    }

    public function danceclasses(): BelongsToMany
    {
        return $this->belongsToMany(Danceclass::class)->withPivot('payment', 'payment_date');
    }
}