@extends('layouts.blog')

@section('content')
    <div class="row">
        <div class="col-8 offset-2">

            @include('posts.single-post', ['post' => $post])

            @if ($post->files->count() > 0)
                <div class="row mt-4">
                    <div class="col-12">

                    @foreach($post->files as $file)
                        <img src="{{ asset('images/icons/bx-file.svg') }}"/>
                        <small>{{ $file->filename }} <span class="text-muted">({{ $file->size }} KB)</span></small>
                    @endforeach

                    </div>
                </div>
            @endif

            <hr class="my-5">

            <div class="row">
                <div class="col-12">
                    @include('posts.comments.create', ['post' => $post])
                </div>
            </div>

            @include('posts.comments.index', ['comments' => $post->comments] )
        </div>
    </div>
@endsection