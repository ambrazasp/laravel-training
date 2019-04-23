@extends('layouts.blog')

@section('content')
    <div class="row">
        <div class="col-8 offset-2">

            <a href="{{ route('categories.index') }}">Back</a>

            <h2>{{$category->name}}</h2>
            <span>Created {{ Carbon\Carbon::parse($category->created_at)->diffForHumans()}}</span>

            @include('components.edit', ['type' => 'categories', 'id' => $category->id])

            @if ($category->posts->count() > 0)
                <h5 class="mt-4">Posts in this category:</h5>
                <div class="row">
                    @foreach($category->posts as $post)
                        <div class="col-12">
                            <img src="{{ asset('images/icons/bx-file.svg') }}"/>
                            <a href="{{ route('posts.show', $post) }}"><small>{{ $post->name }}</small></a>
                        </div>
                    @endforeach

                </div>
            @endif

        </div>
    </div>

@endsection