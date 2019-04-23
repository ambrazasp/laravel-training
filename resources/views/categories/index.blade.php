@extends('layouts.blog')

@section('content')
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Create</a>
    <div class="row">
        @forelse($categories as $category)
            <div class="col-4">
                <div class="card {{ $loop->last ? 'bg-warning' : ''}}">
                    <div class="card-body">
                        <h1 class="mt-4 mb-0"><a class="text-dark" href="{{ route('categories.show', $category->id) }}">{{$category->name}}</a></h1>
                        <div class="mb-3">
                            <small class="text-muted">{{ Carbon\Carbon::parse($category->created_at)->diffForHumans()}}</small>
                        </div>

                        @include('components.edit', ['type' => 'categories', 'id' => $category->id])
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