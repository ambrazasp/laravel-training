@extends('layouts.storage')

@section('content')
    <h2>{{$file->filename}}</h2>
    <span>Created at: {{$file->created_at}}</span>
    <div>Size: {{$file->size}}</div>
    <div>Content: {{$file->content}}</div>

    <a href="{{ route('files.index') }}">Back</a>
@endsection