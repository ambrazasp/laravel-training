@forelse($comments as $comment)
    <div class="row mb-5">
        <div class="col-6">
            <h4>{{ $comment->author }} <span class="small text-muted">({{ $comment->email }})</span></h4>
            <div>{{ $comment->content }}</div>
            @delete(['action' => route('comments.destroy', $comment->id) ])
        </div>
    </div>
@empty
    Nieko nera
@endforelse