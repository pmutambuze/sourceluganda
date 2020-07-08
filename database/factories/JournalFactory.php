<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Journal;
use App\User;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Journal::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->paragraph(3),
        'publishing_date' => Carbon::now()->year,
        'publishing_fee' => 300,
        'frequency' => array_rand(['monthly', 'weekly', 'annually']),
        'user_id' => factory(User::class)->create()->id,

    ];
});
