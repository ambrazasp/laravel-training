@extends('layouts.blog')

@section('content')
    @include('posts.single-post', ['post' => $post])

    @if ($post->files()->count() > 0)
    <div>
        <h3>Files:</h3>
        @foreach($post->files()->get() as $file)
            <h4>{{ $file->filename }} <span class="small text-muted">({{ $file->size }} KB)</span></h4>
            <p>{{ $file->content }}</p>
        @endforeach
    </div>
    @endif

    <div>
        <h3>Comments:</h3>
        @forelse($post->comments()->get() as $comment)
            <h4>{{ $comment->author }} <span class="small text-muted">({{ $comment->email }})</span></h4>
            <div>{{ $comment->content }}</div>
        @empty
            Nieko nera
        @endforelse
    </div>
@endsection