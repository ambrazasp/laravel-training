<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class DuplicatePost extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $id = $request->input('id');
        $post = Post::findOrFail($id);

        $newPost = $post->replicate();
        $newPost->name .= ' (copy)';
        $newPost->save();

        $message = 'Sekmingai ivyko klonavimas';

        return redirect()->route('posts.show', $newPost)->with('message', $message);
    }
}
