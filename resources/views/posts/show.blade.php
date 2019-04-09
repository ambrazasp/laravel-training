@extends('layouts.blog')

@section('content')
    @include('posts.single-post', ['post' => $post])

    <div>
        @forelse($post->comments()->get() as $comment)
            <span>{{ $comment->author }}</span>
            <span>{{ $comment->email }}</span>
            <div>{{ $comment->content }}</div>
        @empty
            Nieko nera
        @endforelse
    </div>
@endsection