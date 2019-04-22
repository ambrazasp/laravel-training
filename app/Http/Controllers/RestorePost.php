<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class RestorePost extends Controller
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
        Post::withTrashed()->findOrFail($id)->restore();

        $message = 'Sekmingai atstatytas';

        return redirect()->route('posts.show', $id)->with('message', $message);
    }
}
