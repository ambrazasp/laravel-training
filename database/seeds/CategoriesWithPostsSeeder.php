<?php

use Illuminate\Database\Seeder;

class CategoriesWithPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(\App\Category::class, 5)->create();
        $posts = factory(\App\Post::class, 10)->create();

        $categories->each(function($category) use ($posts) {
            $category->posts()->attach(
                $posts->random(rand(1,10))->pluck('id')
            );
        });
    }
}
