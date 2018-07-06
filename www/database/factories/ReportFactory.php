<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 06.07.18
 * Time: 17:39
 */

use Faker\Generator as Faker;

$factory->define(App\Report::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,150),
        'report_type_id' => $faker->numberBetween(1,150),
        'sensor_log_id' => $faker->numberBetween(1,150),
        'name' => $faker->name,
        'address' => $faker->address,
        'country' => $faker->country,
        'phone_number' => $faker->e164PhoneNumber,
        'attr_8' => $faker->word,
        'attr_9' => $faker->word,
        'attr_10' => $faker->word,
    ];
});