<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Withdrawal extends Model
{
    /** @use HasFactory<\Database\Factories\WithdrawalFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function fotografer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'fotografer_id');
    }
}
