@extends('layouts.storage')

@section('content')

    <div class="row">
        <div class="col-8 offset-2">

            <h2>{{$file->filename}}</h2>
            <span>Created {{ Carbon\Carbon::parse($file->created_at)->diffForHumans()}}</span>
            <div>Size: {{$file->size}}</div>
            <p>{{$file->content}}</p>

            @include('components.edit', ['type' => 'files', 'id' => $file->id])

            <a href="{{ route('files.index') }}">Back</a>

        </div>
    </div>

@endsection