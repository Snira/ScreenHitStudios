<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('posts.list', [ 'posts' => $posts ]);
    }


    public function show()
    {

    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'posts.title' => 'required',
            'posts.body'  => 'required',
        ]);

        $data = $request->input('posts');

        $post = Post::create($data);

        //Hier mailtje sturen naar users 'nieuwe post'

        return redirect()->route('admin.posts');
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit',['post' => $post]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'posts.title' => 'required',
            'posts.body'  => 'required',
        ]);

        $data = $request->input('posts');
        $post = Post::find($id);
        $post->update($data);

        return redirect()->route('admin.posts');

    }


    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('admin.posts');
    }
}
