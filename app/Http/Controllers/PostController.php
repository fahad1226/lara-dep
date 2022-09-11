<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        $posts  = Post::with('user')->get();
        $users  = User::with('posts')->get();
        return view('posts.index', compact('posts', 'users'));
    }

    public function create()
    {
        $user  = User::all();

        // $user[0]->posts()->create([
        //     'title' => 'Hello JavaScript'
        // ]);

        Post::create([
            'title' => 'This is a gues post'
        ]);


        // $user[1]->posts()->create([
        //     'title' => 'Hello PHP'
        // ]);

        // $user[1]->posts()->create([
        //     'title' => 'Hello Ruby'
        // ]);
    }
}
