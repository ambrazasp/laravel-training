<div class="col-4">
    <div class="card">
        <div class="card-body">
            <h1><a href="{{ route('posts.show', $post->id)  }}">{{$post->name}}</a></h1>
            <span>{{$post->created_at}}</span>
            <p>{{$post->content}}</p>
        </div>
    </div>
</div>
