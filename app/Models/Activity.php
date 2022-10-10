<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tittle',
        'description',
        'is_completed',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_completed' => 'boolean',
    ];


    /**
     * The user() function returns the user that owns the post.
     * 
     * @return A collection of all the users that have the same id as the user_id in the posts table.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * This function returns the activity type that belongs to the activity.
     * 
     * @return The relationship between the Activity and ActivityType models.
     */
    public function type()
    {
        return $this->belongsTo(ActivityType::class);
    }

    /**
     * This function returns the difficulty of the activity.
     * 
     * @return The difficulty of the activity.
     */
    public function difficulty()
    {
        return $this->belongsTo(ActivityDifficulty::class);
    }

    /**
     * This activity belongs to many tags, and the relationship is defined by the activity_tag table,
     * where the activity_id is the foreign key and the tag_id is the local key.
     * 
     * @return A collection of tags.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'activity_tag', 'activity_id', 'tag_id');
    }

    /**
     * A user has many checklists
     * 
     * @return The hasMany relationship is being returned.
     */
    public function checkLists()
    {
        return $this->hasMany(CheckList::class);
    }
}
