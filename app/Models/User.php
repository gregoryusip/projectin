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
     * @var array<int, string>
     */
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function job(){
        return $this->hasMany(Job::class);
    }

    // public function getJobsCountAttribute(){
    //     return $this->job()->count();
    // }

    public function language()
    {
        return $this->hasMany(Language::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function certification()
    {
        return $this->hasMany(Certification::class);
    }

    // public function getRouteKeyName()
    // {
    //     return 'username';
    // }
}
