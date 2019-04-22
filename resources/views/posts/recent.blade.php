@extends('layouts.blog')

@section('content')
    <div class="row">
        @each('posts.single-post-item', $posts, 'post', 'posts.no-posts')
    </div>
@endsection