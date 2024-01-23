<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function blog()
    {
        $pages = Post::whereType('PAGE')->get();
        $posts = Post::whereType('POST')->orderByDESC('id')->get();
        return view('blog', compact('pages', 'posts'));
    }
    public function post(Post $post)
    {
        $pages = Post::whereType('type', 'PAGE')->get();

        return view('blog', compact('pages', 'post'));
    }
}
