<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $title=$faker->sentence(4);
    return [
        'name'=> $title,
        'slug'=> Str::Slug($title,'-'),
        'body'=>$faker->text(500)
    ];
});
