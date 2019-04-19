<form action="{{ route('comments.store') }}" method="POST">
    @csrf

    <input type="hidden" name="post" value="{{ $post->id }}">

    @input(['name' => 'author', 'label' => 'Name' ])
    @input(['name' => 'email', 'label' => 'Email' ])
    @textarea(['name' => 'content', 'label' => 'Contentas' ])

    @submit(['title' => 'Publish'])
</form>