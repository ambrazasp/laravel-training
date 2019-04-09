<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        return view('posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
//        $request->validate([
//            'name' => 'required|min:5',
//            'content' => 'required'
//        ]);

//        DB::table('posts')->insert([
//            'name' => $request->input('name'),
//            'content' => $request->input('content')
//        ]);

        $post = new Post;
        $post->name = $request->input('name');
        $post->content = $request->input('content');
        $post->save();


        $message = 'Post was created';
        return redirect()->route('posts.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
//        $request->validate([
//            'name' => 'required|min:5',
//            'content' => 'required'
//        ]);
//
//        DB::table('posts')->where('id', $id)->update([
//            'name' => $request->input('name'),
//            'content' => $request->input('content')
//        ]);

        $post = Post::find($id);
        $post->name = $request->input('name');
        $post->content = $request->input('content');
        $post->save();

        $message = 'Post was updated';
        return redirect()->route('posts.show', [ 'id' => $id ])->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        DB::table('posts')->delete($id);
        Post::destroy($id);

        $message = 'Post was deleted';
        return redirect()->route('posts.index')->with('message', $message);
    }
}
