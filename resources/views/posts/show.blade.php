@extends('layouts.blog')

@section('content')
    @include('posts.single-post', ['post' => $post])
@endsection