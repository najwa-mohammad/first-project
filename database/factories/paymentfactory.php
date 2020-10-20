<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\payment::class, function (Faker $faker) {
    return [
        //
        'PaymentData' => $faker->datetime,
        
        'Amount1' => $faker-> randomNumber(3),
        
        'CustomerID' => \App\customer::all()->random()->id,
    ];
});
