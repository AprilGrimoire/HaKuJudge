<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Problem;
use Faker\Generator as Faker;

$factory->define(Problem::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'title' => $faker->sentence(),
        'description' => $faker->text(),
        'testdata' => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time
    ];
});
