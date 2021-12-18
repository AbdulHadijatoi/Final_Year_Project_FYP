<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'quiz_id',
        'student_id',
        'score',
        'total_score',
    ];

    /**
     * Get the student associated with the quizresult.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    /**
     * Get the quiz associated with the quizresult.
     */
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
