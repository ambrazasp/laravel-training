<div class="col-4">
    <div class="card">
        <div class="card-body">
            <h1><a href="{{ route('posts.show', $post->id)  }}">{{$post->name}}</a></h1>
            <span>{{$post->created_at}}</span>
            <p>{{$post->content}}</p>
            <a href="{{ route('posts.edit', $post->id)  }}" class="btn btn-sm btn-primary">Edit</a>

            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
