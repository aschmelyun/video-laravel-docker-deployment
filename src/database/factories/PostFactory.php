<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = ucwords($faker->text(32));
    $categories = ['TV', 'Movies', 'Music', 'Games'];
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'category' => Arr::random($categories),
        'content' => $faker->text(1024)
    ];
});
