<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['user_id', 'title'];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Gues User'
        ]);
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();

        // return $this->belongsToMany(Tag::class, 'my_post_tag', 'post_id', 'tag_id');
        # post_tag is the pivot table name, if we follow the right naming convebtoins we don;t need to pass the db table name in the scond parameter.
    }
}
