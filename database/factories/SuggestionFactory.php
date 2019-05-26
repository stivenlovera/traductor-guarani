<?php

use Faker\Generator as Faker;

$factory->define(App\Suggestion::class, function (Faker $faker) {
    $title=$faker->sentence(4);
    return [
        'suggestion'=>$faker->text(200),
        'status'=>$faker->randomElement(['ACTIVE','DISABLED']),
    ];
});
