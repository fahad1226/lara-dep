<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $dispatchesEvents = [
    //     'created' => UserCreated::class
    // ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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

    public function company()
    {
        return $this->hasOne(Company::class)->withDefault([
            'name' => 'Not Yet Assigned'
        ]);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function logins()
    {
        return $this->hasMany(Login::class);
    }

    public function scopeWithLastLoginAt($query)
    {
        $query->addSelect([
            'last_login_at' => Login::select('login_at')
                ->whereColumn('user_id', 'users.id')
                ->latest()
                ->take(1)
        ])
            ->withCasts(['last_login_at' => 'datetime']);
    }
}
