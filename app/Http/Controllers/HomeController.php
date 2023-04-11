<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('home.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function detail(Post $post)
    {
        return view('home.detail', [
            'post' => $post
        ]);
    }
}