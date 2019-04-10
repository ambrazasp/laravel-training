@extends('layouts.storage')

@section('content')

    <form action="{{ route('files.update', [ 'id' => $file->id ]) }}" method="POST">

        @csrf
        @method('PUT')

        @include('files.form')

        @submit(['title' => 'Save'])

    </form>

@endsection