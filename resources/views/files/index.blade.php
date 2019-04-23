@extends('layouts.storage')

@section('content')
    <a href="{{ route('files.create') }}" class="btn btn-primary mb-3">Create</a>
    <div class="row">
        @forelse($files as $file)
            <div class="col-4">
                <div class="card {{ $loop->last ? 'bg-warning' : ''}} mb-5">
                    <div class="card-body">
                        <h1 class="mt-4 mb-0"><a class="text-dark" href="{{ route('files.show', $file->id) }}">{{$file->filename}}</a></h1>
                        <div class="mb-3">
                            <small class="text-muted">{{ Carbon\Carbon::parse($file->created_at)->diffForHumans()}}</small>
                        </div>
                        <div class="mb-3">
                            <small class="text-primary">{{$file->size}} KB</small>
                        </div>

                        @include('components.edit', ['type' => 'files', 'id' => $file->id])
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