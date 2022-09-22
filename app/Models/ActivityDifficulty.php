<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityDifficulty extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'points_reward',
    ];

    /**
     * A user has many activities
     * 
     * @return A collection of activities.
     */
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
