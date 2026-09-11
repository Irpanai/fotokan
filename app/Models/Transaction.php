<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function photo(): BelongsTo
    {
        return $this->belongsTo(Photo::class);
    }

    public function pembeli(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pembeli_id');
    }
}
