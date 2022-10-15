<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->select('id', 'title', 'body', 'published_at', 'user_id')
            ->with('user:id,name')  # the shotcut of the below function is this line of code.
            // ->with(['user' => function ($query) { # we can clean up this code by laravel shortcut
            //     $query->select('id', 'name');
            // }])
            ->latest('published_at')
            ->simplePaginate(30);
        return view('posts.index', compact('posts'));
    }
}
