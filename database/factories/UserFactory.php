<?php

use App\Macro;
use App\Micro;
use App\Mini;
use App\Subdivision;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Out::class, function (Faker $faker) {
    return [
        'subdivision_id' => Subdivision::inRandomOrder()->first()->id,
        'macro_id' => Macro::inRandomOrder()->first()->id,
        'micro_id' => Micro::inRandomOrder()->first()->id,
        'mini_id' => Mini::inRandomOrder()->first()->id,
        'amount' => $faker->randomFloat(2, 0, 100),
        'note' => $faker->text(20),
        'date' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
        'created_at' => Carbon::now()
    ];
});