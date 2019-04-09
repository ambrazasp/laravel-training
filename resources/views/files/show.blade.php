@extends('layouts.storage')

@section('content')
    <h2>{{$file->filename}}</h2>
    <span>Created at: {{$file->created_at}}</span>
    <div>Size: {{$file->size}}</div>
    <div>Content: {{$file->content}}</div>
    <a href="{{ route('files.edit', $file->id)  }}" class="btn btn-sm btn-primary">Edit</a>
    @delete(['action' => route('files.destroy', $file->id) ])

    <a href="{{ route('files.index') }}">Back</a>
@endsection