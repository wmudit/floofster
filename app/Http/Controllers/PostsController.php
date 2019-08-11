<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        //return view('posts.create');
    }

    public function show()
    {

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

        auth()->user()->posts()->create($data);

        //dd(request()->all());
    }
}
