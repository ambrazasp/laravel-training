@extends('layouts.storage')

@section('content')
    <form action="{{ route('files.store') }}" method="POST">
        @csrf

        @include('files.form')

        @submit(['title' => 'Save'])

    </form>
@endsection