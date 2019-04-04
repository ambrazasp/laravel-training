@extends('layouts.blog')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        @include('posts.form')

        @submit(['title' => 'Save'])
    </form>
@endsection