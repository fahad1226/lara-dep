<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);

        // return $this->hasOne(Address::class, 'foreign_key', 'local_key');
        //  fk -> foreigh key of the user Table
        //  lk ->local key of the address table whcih is the id key
    }

    
}
