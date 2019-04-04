@extends('layouts.blog')

@section('content')

    <form action="{{ route('posts.update', [ 'id' => $post->id ]) }}" method="POST">
        @csrf
        @method('PUT')

        @include('posts.form')

        @submit(['title' => 'Save'])
    </form>

@endsection