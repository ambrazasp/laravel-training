@forelse($comments as $comment)
    <div class="row my-5">
        <div class="col-11">
            <h4>{{ $comment->author }} <a class="text-muted small" href="mailto:{{ $comment->email }}">({{ $comment->email }})</a></h4>
            <div>{{ $comment->content }}</div>
        </div>
        <div class="col-1">
            @delete(['action' => route('comments.destroy', $comment->id) ])
        </div>
    </div>
@empty
    Nieko nera
@endforelse