<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable = ['photo', 'user_id'];

    /**
     * Get the user associated with the Images.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
