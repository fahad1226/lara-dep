<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'tags'])->get();
        $tags  = Tag::with('posts')->get();
        return view('tags.index', compact('posts', 'tags'));
    }


    public function createTag()
    {
        Tag::create([
            'name' => 'PHP',
        ]);

        Tag::create([
            'name' => 'Python',
        ]);

        Tag::create([
            'name' => 'JavaScript',
        ]);
    }

    public function create()
    {
        $post   = Post::first();
        $tag    = Tag::first();

        $post->tags()->attach(1);
    }

    public function destroy()
    {
        $post   = Post::first();
        //  $tag    = Tag::first();

        $post->tags()->detach([1, 2, 3]);
    }

    public function update()
    {
        $post   = Post::first();
        //  $tag    = Tag::first();

        $post->tags()->sync([5, 6, 7]);
    }
}
