<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;
    // course_id student_id status
    protected $fillable = [
        'student_id',
        'course_id',
    ];

    /**
     * Get the course associated with the studentcourse.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get the student associated with the studentCourse.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
