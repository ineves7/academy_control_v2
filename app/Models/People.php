<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'hour_id',
        'weekday_id',
        'name',
        'data_de_nascimento',
        'telefone',
        'valor_mensalidade',
        'dia_mensalidade'
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

    public function hour(): BelongsTo
    {
        return $this->belongsTo(Hour::class, 'hour_id');
    }

    public function weekday(): BelongsTo
    {
        return $this->belongsTo(Weekday::class, 'weekday_id');
    }
    
    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'people_id');
    }
}