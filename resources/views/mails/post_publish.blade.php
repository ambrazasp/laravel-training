@component('mail::message')

    @slot('title')
        labas rytas
    @endslot
```labas``` magija
    <div>
        <h1>ooooooooo, is leto leidziasi saule</h1>
        <p>Palikdama pasauli</p>
        <p>Skesti naktyje</p>
        <p>{{ $post->name }}</p>
    </div>

@component('mail::button')
    @slot('url', route('posts.show', $post))
    labas
@endcomponent
@endcomponent
