<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\order::class, function (Faker $faker) {
    return [
        //
        'OrderData' => $faker->datetime,
        'RequiredData' => $faker-> datetime,
        'ShippedData' => $faker-> datetime,
        'status' => $faker-> randomNumber(3),
        'Comments' => $faker-> word,
        'CustomerID' => \App\customer::all()->random()->id,


    ];
});
;