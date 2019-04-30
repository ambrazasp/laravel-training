<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
//        $this->authorizeResource(Post::class, 'post');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::withCount('comments')->paginate(12);

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
        $categories = Category::all();
        return view('posts.create', compact('post', 'categories'));
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
//        $post->save();
        Auth::user()->posts()->save($post);

        $post->categories()->attach($request->input('categories'));

        $message = 'Post was created';
        return redirect()->route('posts.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
//        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
//        $post = Post::find($id);
//        $this->authorize('update', $post);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
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

//        $post = Post::find($id);
//        $this->authorize('update', $post);
        $post->name = $request->input('name');
        $post->content = $request->input('content');
        $post->save();

        $message = 'Post was updated';
        return redirect()->route('posts.show', compact('post'))->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
//        DB::table('posts')->delete($id);
//        $post = Post::find($id);

//        $this->authorize('delete', $post);

//        Post::destroy($post->id);
        $post->delete();

        $message = 'Post was deleted';
        request()->session()->flash('message', $message);

        if (request()->expectsJson()) {
            return response()->json([], 204);
        }
        return redirect()->route('posts.index');
    }
}
