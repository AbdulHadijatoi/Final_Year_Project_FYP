<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    // question_type question answer quiz_id

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'question_type',
        'question',
        'answer',
        'quiz_id',
    ];

    /**
     * Get the quiz associated with the questions.
     */
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    /**
     * Get the answers for the Questions.
     */
    public function answers()
    {
        return $this->hasOne(Answers::class);
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();
        self::deleting(function($questions) { // before delete() method call this
             $questions->answers()->delete();
             // do the rest of the cleanup...
        });
    }
}
