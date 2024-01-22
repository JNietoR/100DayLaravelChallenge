<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function blog()
    {
        $pages = Post::whereType('type', 'PAGE')->get();
        $post = Post::whereType('type', 'POST')->orderByDESC('id')->get();
        return view('blog', compact('pages', 'post'));
    }
    public function post(Post $post)
    {
        $pages = Post::whereType('type', 'PAGE')->get();

        return view('blog', compact('pages', 'post'));
    }
}
