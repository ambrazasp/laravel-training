@extends('layouts.storage')

@section('content')

    <form action="{{ route('files.update', [ 'id' => $file->id ]) }}" method="POST">

        @csrf
        @method('PUT')

        @input(['name' => 'filename', 'label' => 'Pavadinimas', 'value' => $file->filename ])
        @input(['name' => 'size', 'label' => 'Pavadinimas', 'value' => $file->size ])
        @textarea(['name' => 'content', 'label' => 'Contentas', 'value' => $file->content ])
        @submit(['title' => 'Save'])

    </form>

@endsection