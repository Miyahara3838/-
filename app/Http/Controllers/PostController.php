<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts'=> $post->getPaginateBylimit(3)]);
    }
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    public function posted_creation()
    {
        return view('posts.posted_creation');
    }
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

}
