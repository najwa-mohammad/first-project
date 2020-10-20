<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\productline::class, function (Faker $faker) {
    return [
        'DescInText' => $faker-> word,
        'DescInHTML' => $faker-> word,
        'image' => $faker-> word
        
    ];
});

