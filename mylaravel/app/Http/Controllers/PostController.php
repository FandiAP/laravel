<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        return view('home', compact('post'));
    }   
    public function artikel()
    {
        $posts = Post:: all();
        return view('artikel', compact('posts'));
    }
    public function create()
    {
        return view('post.create');
    }
    public function store(Request $req)
    {
        $in = new Post;
        $in->title = $req->title;
        $in->content = $req->content;

        $file = $req->file('image');
        $filename =$file->getClientOriginalName();
        $req->file('iamge')->move('img/', $filename);
        $in->gambar = $filename;
        $in->save();

        return redirect('/artikel');
    }
    public function edit($id)
    {
        $post = Post::find($id)
        return view('post.edit', compact('post'));
    }
}

