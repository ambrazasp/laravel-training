<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 100)
            ->create()
            ->each(function(Post $post) {

                $post->comments()->saveMany(
                    factory(\App\Comment::class, rand(0, 10))->make()
                );
            });

//        for ($i = 0; $i < 10; $i++) {
//            $post = new Post;
//            $post->name = 'Title no. ' . ($i + 1);
//            $post->content = 'Post content ' . Str::random(100);
//            $post->save();
//        }
    }
}
