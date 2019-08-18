<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $limit = 0;

    public function __construct()
    {
        $this->limit = 20;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($offset = 0)
    {
        $posts = \App\Post::orderBy('created_at', 'desc')->offset($offset)->limit($this->limit)->get();
        return view('home', [
            'posts' => $posts,
        ]);
    }
}
