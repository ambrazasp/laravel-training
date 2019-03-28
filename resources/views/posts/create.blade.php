@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        @input(['name' => 'name', 'label' => 'Pavadinimas'])
        @textarea(['name' => 'content', 'label' => 'Contentas'])
        @include('components.form.submit', ['title' => 'Save'])

    </form>
@endsection