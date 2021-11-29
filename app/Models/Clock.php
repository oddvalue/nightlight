<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Clock extends Model
{
    protected $casts = [
        'sunrise_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeWhereCurrentUser(Builder $query)
    {
        $query->where('user_id', auth()->user()->id);
    }
}
