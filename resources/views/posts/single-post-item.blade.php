<div class="col-4 mb-5">
    <div class="card">
        <div class="card-body">
            <h2 class="mb-0"><a class="text-dark" href="{{ route('posts.show', $post->id)  }}">{{$post->name}}</a> <span class="text-muted small">({{ $post->comments_count }})</span></h2>
            <div class="mb-3">
                <small class="text-muted">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</small>
            </div>

            @if ($post->trashed())
            <div class="mb-3">
                <small class="text-danger">Deleted: {{ Carbon\Carbon::parse($post->deleted_at)->diffForHumans()}}</small>

                <form action="{{ route('posts.restore') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $post->id }}">

                    <button type="submit" class="btn btn-sm btn-primary">Restore</button>
                </form>
            </div>
            @endif

            @if ($post->user)
                <div class="mb-3">
                    <small class="text-info">
                            {{ $post->user->name }}
                    </small>
                </div>
            @endif

            @if ($post->categories)
            <div class="mb-3">
                <small class="text-primary">
                @foreach($post->categories as $category)
                    {{ $category->name }},
                @endforeach
                </small>
            </div>
            @endif

            <p>{{$post->content}}</p>
            {{--<a href="{{ route('posts.edit', $post->id)  }}" class="btn btn-link p-0 m-0"><img src="{{ asset('images/icons/bx-edit.svg') }}"/></a>--}}

            {{--@duplicate(['action' => route('posts.duplicate', $post->id), 'id' => $post->id ])--}}

            {{--@delete(['action' => route('posts.destroy', $post->id) ])--}}
        </div>
    </div>
</div>
