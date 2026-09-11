<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function fotografer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'fotografer_id');
    }

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }
}
