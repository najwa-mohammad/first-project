<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\office::class, function (Faker $faker) {
    return [
        'Code' => $faker-> randomNumber(3),
        'City' => $faker-> word,
        'Phone' => $faker-> word,
        'Address1' => $faker-> word,
        'Address2' => $faker-> word,
        'State' => $faker-> word,
        'Cuntry' => $faker-> word,
        'Territory' => $faker-> word,
        'PostelCode' => $faker-> randomNumber(3)
    ];
});
