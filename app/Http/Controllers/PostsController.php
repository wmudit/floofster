<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Aws\S3\S3Client;
use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('store');
    }

    public function create()
    {
        //return view('posts.create');
    }

    public function show($post_hash)
    {
        $post = Post::where('post_hash', $post_hash)->firstOrFail();
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function store(Request $request)
    {
        $d = date("Y-m-d h:i:s") . "_" . auth()->user()->email . "_" . date("Y-m-d h:i:s");
        $hash = hash('crc32b', $d, false);
        $request->request->add(['post_hash' => $hash]);
        $data = request()->validate([
            'caption' => 'required',
            'media' => ['required', 'image'],
            'post_hash' => 'required',
        ]);

        //$image_path = request('media')->store('uploads', 'public');
        $file = $request->file('media');
        $image_path = 'uploads/' . $file->getClientOriginalName();
        Storage::disk('s3')->put($image_path, fopen($file, 'r+'), 'public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'media' => $image_path,
            'post_hash' => $hash,
        ]);

        return redirect('/');

    }
}
