<div class="col-4">
    <div class="card">
        <div class="card-body">
            <h1><a href="{{ route('posts.show', $post->id)  }}">{{$post->name}}</a></h1>
            <span>{{$post->created_at}}</span>
            <p>{{$post->content}}</p>
            <a href="{{ route('posts.edit', $post->id)  }}" class="btn btn-sm btn-primary">Edit</a>
            <a href="{{ route('posts.copy', $post->id)  }}" class="btn btn-sm btn-primary">Copy</a>

            @duplicate(['action' => route('posts.duplicate', $post->id), 'id' => $post->id ])

            @delete(['action' => route('posts.destroy', $post->id) ])
        </div>
    </div>
</div>
