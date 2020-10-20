<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\employee::class, function (Faker $faker) {
    return [
        
        'reportsTo' => $faker-> randomNumber(3),
        'LastName' => $faker-> word,
        'FirstName' => $faker-> word,
        'Extension' => $faker-> word,
        'Email' => $faker-> word,
        'JobTitle' => $faker-> word,
        'OfficeCode' => \App\office::all()->random()->Code,
    ];
});








