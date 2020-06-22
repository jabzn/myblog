<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 4)
            ->create()
            ->each(function ($category) {
                factory(Post::class, 5)
                    ->create(['category_id' => $category->id]);
            });
    }
}
