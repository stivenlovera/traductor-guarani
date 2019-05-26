<?php

use Faker\Generator as Faker;

$factory->define(App\Translation::class, function (Faker $faker) {
    $title=$faker->sentence(4);
    return [
        'user_id'=>rand(1,20),
        'guarani'=>$title,
        'slug'=>str_slug($title),
        'translated'=>$faker->text(25),
        'definition'=>$faker->text(200),
        'status'=>$faker->randomElement(['ACTIVE','DISABLED']),
    ];
});
