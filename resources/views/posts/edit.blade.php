@extends('layouts.app')

@section('content')

    <form action="{{ route('posts.update', [ 'id' => $post->id ]) }}" method="POST">

        @csrf
        @method('PUT')

        @input(['name' => 'name', 'label' => 'Pavadinimas', 'value' => $post->name ])
        @textarea(['name' => 'content', 'label' => 'Contentas', 'value' => $post->content ])
        @include('components.form.submit', ['title' => 'Save'])

    </form>

@endsection