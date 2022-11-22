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
        'active',
        'name',
        'level_id',
        'genre_id',
        'birthdate',
        'phone',
        'category_id',
        'start_date'
    ];

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'people_id');
    }

    public function danceclasses(): BelongsToMany
    {
        return $this->belongsToMany(Danceclass::class)->withPivot('payday', 'monthly_payment', 'people_id', 'danceclass_id');
    }
}