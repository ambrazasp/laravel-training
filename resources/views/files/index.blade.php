@extends('layouts.storage')

@section('content')
    <a href="{{ route('files.create') }}" class="btn btn-primary mb-3">Create</a>
    <div class="row">
        @forelse($files as $file)
            <div class="col-4">
                <div class="card {{ $loop->last ? 'bg-warning' : ''}}">
                    <div class="card-body">
                        <h1><a href="{{ route('files.show', $file->id) }}">{{$file->filename}}</a></h1>
                        <span>{{$file->created_at}}</span>
                        <span>{{$file->size}}</span>
                        <div>
                            <a href="{{ route('files.edit', $file->id)  }}" class="btn btn-sm btn-primary">Edit</a>
                            @delete(['action' => route('files.destroy', $file->id) ])
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                Nera nieko
            </div>
        @endforelse
    </div>
@endsection