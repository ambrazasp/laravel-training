@extends('layouts.blog')

@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create</a>
    <div class="row">
        @each('posts.single-post-item', $posts, 'post', 'posts.no-posts')
    </div>

    <div class="row">
        <div class="col-12">
            {{ $posts->links() }}
        </div>
    </div>
@endsection