<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function create()
    {
        //return view('posts.create');
    }

    public function show($post_hash)
    {
        $post = Post::findOrFail($post_hash);
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function store(Request $request)
    {
        $d = date("Y-m-d h:i:s") . "_" . auth()->user()->email . "_" . date("Y-m-d h:i:s");
        $hash = hash('crc32b', $d, false);
        //dd(auth()->user()->username);
        $request->request->add(['post_hash' => $hash]);
        $data = request()->validate([
            'caption' => 'required',
            'media' => ['required', 'image'],
            'post_hash' => 'required',
        ]);

        $image_path = request('media')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'media' => $image_path,
            'post_hash' => $hash,
        ]);

        return redirect('/');

    }
}
