<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    

    protected $fillable = [
        'profileVisibility',
        'username',
        'email',
        'password',
        'role',
        'phone',
        'phoneVisibility',
        'firstname',
        'lastname',
        'gender',
        'tagline',
        'description',
        'education',
        'language',
        'location',
        'skills',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the student associated with the user.
     */
    public function student()
    {
        return $this->hasOne(Student::class);
    }
    /**
     * Get the tutor associated with the user.
     */
    public function tutor()
    {
        return $this->hasOne(Tutor::class);
    }


    /**
     * Get the parent associated with the user.
     */
    public function parent()
    {
        return $this->hasOne(StudentParent::class);
    }

    /**
     * Get the parent associated with the user.
     */
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    /**
     * Get the images for the user.
     */
    public function images()
    {
        return $this->hasOne(Images::class);
    }
}
