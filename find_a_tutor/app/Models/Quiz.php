<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    // title description duration course_id
    
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'quizes';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'duration',
        'course_id',
    ];

    /**
     * Get the course associated with the quiz.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get the questions for the quiz.
     */
    public function questions()
    {
        return $this->hasMany(Questions::class);
    }

    /**
     * Get the quizResult for the quiz.
     */
    public function quizResult()
    {
        return $this->hasMany(QuizResult::class);
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();
        self::deleting(function($quiz) { // before delete() method call this
             $quiz->questions()->each(function($questions) {
                $questions->delete(); // <-- direct deletion
             });
             $quiz->quizResult()->each(function($quizResult) {
                $quizResult->delete(); // <-- direct deletion
             });
             // do the rest of the cleanup...
        });
    }
}
