@input(['name' => 'name', 'label' => 'Pavadinimas', 'value' => $post->name ])
@textarea(['name' => 'content', 'label' => 'Contentas', 'value' => $post->content ])

<select class="custom-select" multiple name="categories[]">
    @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>