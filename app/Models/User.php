<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Events\UserCreated;
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

    /** Event Methods */

    public static function boot()
    {
        parent::boot();

        # we can see that this logic is increasing in this PHP script, it will be hard to maintain the logoc grow,
        # and that's where Pbserver comes into play.
    }

    public function address()
    {
        return $this->hasOne(Address::class)->withDefault([
            'name' => 'Not Available'
        ]);
    }


    public function addresses()
    {
        return $this->hasMany(Address::class);
    }


    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public function compnay()
    {
        return $this->belongsTo(Company::class);
    }
}
