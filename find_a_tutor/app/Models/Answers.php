<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    // option1 option2 option3 option4 question_id

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */ 
    protected $fillable = [
        'option1',
        'option2',
        'option3',
        'option4',
        'question_id',
    ];
}
