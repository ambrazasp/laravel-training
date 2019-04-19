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

        <div class="row">
            <div class="col-4">
                @include('posts.comments.create', ['post' => $post])
            </div>
        </div>

        @include('posts.comments.index', ['comments' => $post->comments] )

    </div>
@endsection