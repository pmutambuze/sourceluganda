<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use App\User;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'title' => 'member',
        'address' => $faker->address,
        'user_id' => factory(User::class)->create()->id,
    ];
});
