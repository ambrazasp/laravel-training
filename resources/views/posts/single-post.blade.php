<h1 class="mt-4 mb-0"><a class="text-dark" href="{{ route('posts.show', $post->id)  }}">{{$post->name}}</a></h1>
<div class="mb-3">
    <small class="text-muted">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</small>
</div>
<p class="my-3">{{$post->content}}</p>

@include('components.edit', ['type' => 'posts', 'id' => $post->id])
