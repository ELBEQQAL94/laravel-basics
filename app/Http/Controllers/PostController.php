<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::all();
        return view('posts.index', [
            'posts' => $posts 
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
    
    public function store(StorePostRequest $request)
    {
        $data = $request->only(['title', 'content']);
        $post = Post::create($data);
        $request->session()->flash('status', 'Post was created');
        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(StorePostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        $request->session()->flash('status', 'Post was edited.');
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }
}
