<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Pipeline\Pipeline;

class PostController
{
    public function index()
    {
        $posts = Post::allPosts();
        return view('post.index', ['posts' => $posts]);
    }

}
