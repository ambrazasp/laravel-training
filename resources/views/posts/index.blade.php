@extends('layouts.app')

@section('content')
    <div class="row">
        @forelse($posts as $post)
            <div class="col-4">
                <div class="card {{ $loop->first ? 'bg-danger' : ''}}">
                    <div class="card-body">
                        <h1>{{$post['title']}}</h1>
                        <span>{{$post['created_at']}}</span>
                        <p>{{$post['content']}}</p>
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