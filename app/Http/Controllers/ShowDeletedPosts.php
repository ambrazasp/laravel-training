<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ShowDeletedPosts extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
//        $posts = Post::withCount('comments')->withTrashed()->paginate(9);
        $posts = Post::withCount('comments')->onlyTrashed()->paginate(9);

        return view('posts.index', compact('posts'));
    }
}
