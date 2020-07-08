<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Library;
use App\User;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Library::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'abstract' => $faker->paragraph(2),
        'owner_id' => factory(User::class),
        'keywords' => $faker->paragraph(3),
        'category_id' => factory(Category::class),
        'authors_name' => $faker->name,
        'authors_email' => $faker->email,
        'address' => $faker->address,
        'country' => $faker->country,
        'organisation' => $faker->company,
        'mobile' => $faker->phoneNumber,
        'viewers_name' => $faker->name,
        'viewers_email' => $faker->email,
        'total_words' => '3001-4500 words',
        'package_id' => array_rand([1, 2, 3, 4]),
    ];
});
