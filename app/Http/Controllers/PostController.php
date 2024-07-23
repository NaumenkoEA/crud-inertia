<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return inertia('Post/index', compact('posts'));
    }

    public function create()
    {
        return inertia('Post/create');
    }

    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();
        Post::create($validatedData);
        return redirect()->route('post.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function edit(Post $post){
        return inertia('Post/edit', compact('post'));
    }

    public function update(Post $post ,updateRequest $request){
        $post->update($request->validated());
        return redirect()->route('post.index');
    }


}
