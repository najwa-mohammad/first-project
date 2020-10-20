<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\customer::class, function (Faker $faker) {
    return [
        'salesRepEmployeeNum' => \App\employee::all()->random()->id,
        'Name' => $faker-> word,
        'LastName' => $faker-> word,
        'FirstName' => $faker-> word,
        'Phone' => $faker-> word,
        'Address1' => $faker-> word,
        'Address2' => $faker-> word,
        'City' => $faker-> word,
        'State' => $faker-> word,
        'Cuntry' => $faker-> word,
        'PostelCode' => $faker-> randomNumber(3),
        'CreditLimit1' => $faker-> randomNumber(3),
       
    ];
});

