<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    /**
     * Get the user associated with the tutor.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the course for the tutor.
     */
    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
