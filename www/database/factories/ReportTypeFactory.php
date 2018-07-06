<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 06.07.18
 * Time: 17:39
 */

use Faker\Generator as Faker;

$factory->define(App\ReportType::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});