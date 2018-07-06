<?php

use Faker\Generator as Faker;

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

$factory->define(App\SensorLog::class, function (Faker $faker) {
    return [
        'sensor_1' => $p1 = rand(1, 10),
        'sensor_2' => $p2 = rand(100, 200),
        'sensor_3' => $p3 = rand(500, 1000),
        'sum' => $p1 + $p2 + $p3,
    ];
});
