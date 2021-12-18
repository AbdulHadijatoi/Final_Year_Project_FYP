<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'student_parent_id',
    ];

    /**
     * Get the user associated with the student.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the parent associated with the student.
     */
    public function parent()
    {
        return $this->belongsTo(StudentParent::class);
    }

    /**
     * Get the studentCourse for the student.
     */
    public function studentCourse()
    {
        return $this->hasMany(StudentCourse::class);
    }

    /**
     * Get the quizResult for the student.
     */
    public function quizResult()
    {
        return $this->hasMany(quizResult::class);
    }
}
