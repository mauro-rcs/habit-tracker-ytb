<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
//    fillable: safe for mass assignment
//    [
//        'name' => "John Doe",
//        'email' => "john@doe",
//        'password' => 'secret',
//        'is_admin' => 'true'
//    ]

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        //forma de mostrar os dados
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //has many: 1:N para habits
    public function habits(): HasMany
    {
        // a fk (user_id) ele já define sozinho.
        return $this->hasMany(Habit::class);
    }

    // um usuário pode ter muitos registros
    public function HabitLogs(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }
}
