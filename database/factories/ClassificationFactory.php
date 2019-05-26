<?php

use Faker\Generator as Faker;

$factory->define(App\Classification::class, function (Faker $faker) {
    $title=$faker->unique()->word(5);
     return [
         'name'=>$title,// uno dos
         'slug'=>str_slug($title),//uno-dos
         'status'=>$faker->randomElement(['ACTIVE','DISABLED']),
     ];
 });