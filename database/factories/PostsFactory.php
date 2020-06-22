<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id' => function () {
            return factory(Category::class)->create();
        },
        'title'       => $title = $faker->sentence,
        'slug'        => Str::slug($title, '-'),
        'body'        => $faker->paragraph,
    ];
});
