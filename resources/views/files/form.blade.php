@input(['name' => 'filename', 'label' => 'Pavadinimas', 'value' => $file->filename ])
@input(['name' => 'size', 'label' => 'Dydis', 'value' => $file->size ])
@input(['name' => 'post_id', 'label' => 'Post ID', 'value' => $file->post_id] )
@textarea(['name' => 'content', 'label' => 'Contentas', 'value' => $file->content ])