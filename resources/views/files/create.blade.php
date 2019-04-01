@extends('layouts.storage')

@section('content')
    <form action="{{ route('files.store') }}" method="POST">
        @csrf

        @input(['name' => 'filename', 'label' => 'Name'])
        @input(['name' => 'size', 'label' => 'Size'])
        @textarea(['name' => 'content', 'label' => 'Content'])
        @include('components.form.submit', ['title' => 'Save'])

    </form>
@endsection