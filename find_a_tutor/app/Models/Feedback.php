<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'comment',
        'ratting',
        'date',
        'user_id',
        'course_id',
    ];

    /**
     * Get the user associated with the feedback.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the course associated with the feedback.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
