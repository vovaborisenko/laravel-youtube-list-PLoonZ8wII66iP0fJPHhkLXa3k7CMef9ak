<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\BlogPost;
use Illuminate\Support\Str;

$factory->define(BlogPost::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3, 8), true);
    $txt = $faker->realText(rand(1000, 4000));
    $isPablished = rand(1, 5) > 1;
    $updatedAt = $faker->dateTimeBetween('-2 months', '-1 days');

    return [
        'category_id' => rand(1, 10),
        'user_id' => rand(1, 5) == 5 ? 1 : 2,
        'slug' => Str::slug($title),
        'title' => $title,
        'excerpt' => $faker->text(rand(40, 100)),
        'context_raw' => $txt,
        'context_html' => $txt,
        'is_published' => $isPablished,
        'published_at' => $isPablished ? $updatedAt : null,
        'created_at' => $faker->dateTimeBetween('-3 months', '-2 months'),
        'updated_at' => $updatedAt,
    ];
});
