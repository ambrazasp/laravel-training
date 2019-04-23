@extends('layouts.blog')

@section('content')

    <form action="{{ route('categories.update', [ 'id' => $category->id ]) }}" method="POST">

        @csrf
        @method('PUT')

        @include('categories.form')

        @submit(['title' => 'Save'])

    </form>

@endsection