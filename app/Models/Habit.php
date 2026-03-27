<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Habit extends Model
{
    protected $fillable = [
        'user_id',
        'name',
    ];

    public function post(): BelongsTo
    {
        //usuário 1:N hábitos -> hábitos N:1 usuário
        return $this->belongsTo(User::class);
    }

    //um hábito pode ter muitos registros
    public function habitLogs(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }
}
