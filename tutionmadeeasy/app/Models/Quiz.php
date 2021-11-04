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
}
