<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HabitLog extends Model
{
    protected $fillable = [
        "user_id",
        "name",
        "completed_at",
    ];

    //um registro de hábito pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function habits(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }
}
