@extends('layouts.blog')

@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create</a>
    <div class="row">
        @each('posts.single-post', $posts, 'post', 'posts.no-posts')

        {{ $posts.links() }}
    </div>
@endsection