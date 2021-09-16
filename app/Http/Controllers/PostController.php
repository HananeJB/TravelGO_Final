<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('backend.blog.table_blog', compact('posts'));
    }

    public function create()
    {
        return view('backend.blog.edit_blog');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->published_at = $request->published_at;

        $post->save();
        return redirect('/home')->with('success','Post created successfully!');
    }

    public function edit(Post $post)
    {
        return view('backend.blog.edit_blog', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->published_at = $request->published_at;

        $post->save();
        return redirect('/home')->with('success','Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/home')->with('success','Post deleted successfully!');
    }

    public function BlogList()
    {
        $posts = Post::all();
        return view('frontend.blog.blog', compact('posts'));
    }
    public function BlogSingle($id)
    {
        $posts = Post::find($id)->first();
        return view('frontend.blog.blog_single', compact('posts'));
    }
}
