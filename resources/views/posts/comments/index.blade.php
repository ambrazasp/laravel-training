@forelse($comments as $comment)
    <h4>{{ $comment->author }} <span class="small text-muted">({{ $comment->email }})</span></h4>
    <div>{{ $comment->content }}</div>
@empty
    Nieko nera
@endforelse