<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'category',
        'title',
        'description',
        'enrollment_key',
        'status',
        'tutor_id',
    ];

    /**
     * Get the tutor associated with the course.
     */
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    /**
     * Get the schedule for the course.
     */
    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }

    /**
     * Get the quiz for the course.
     */
    public function quiz()
    {
        return $this->hasMany(Quiz::class);
    }

    /**
     * Get the studentCourse for the course.
     */
    public function studentCourse()
    {
        return $this->hasMany(StudentCourse::class);
    }
}
