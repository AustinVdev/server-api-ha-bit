<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'birthday',
        'password',
        'is_active',
        'is_temp_password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday' => 'date',
        'is_active' => 'boolean',
        'is_temp_password' => 'boolean',
    ];

    /**
     * This function returns the Theme model that is associated with the current User model.
     * 
     * @return A collection of all the themes that belong to the user.
     */
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    /**
     * A user has many activities
     * 
     * @return A collection of activities.
     */
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    /**
     * This user has many achievements, and the achievements are stored in the user_achievement table,
     * and the user_id is the foreign key in the user_achievement table, and the achievement_id is the
     * foreign key in the user_achievement table.
     * 
     * @return The user_achievement table.
     */
    public function achievements()
    {
        return $this->belongsToMany(Achievement::class, 'user_achievement', 'user_id', 'achievement_id');
    }
}
