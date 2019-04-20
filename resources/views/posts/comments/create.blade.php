<form action="{{ route('comments.store') }}" method="POST">
    @csrf

    <input type="hidden" name="post" value="{{ $post->id }}">


    <div class="row">
        <div class="col">
            @input(['name' => 'author', 'label' => 'Name' ])
        </div>

        <div class="col">
            @input(['name' => 'email', 'label' => 'Email' ])
        </div>
    </div>
    @textarea(['name' => 'content'])

    @submit(['title' => 'Post'])
</form>