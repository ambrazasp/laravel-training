@extends('layouts.app')

@section('content')
    ziurim
    @include('posts.single-post', ['post' => $post])
@endsection