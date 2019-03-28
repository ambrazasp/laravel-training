@extends('layouts.app')

@section('content')
    <div class="row">
        @each('posts.single-post', $posts, 'post', 'posts.no-posts')
    </div>
@endsection