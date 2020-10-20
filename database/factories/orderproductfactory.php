<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\order_product::class, function (Faker $faker) {
    return [
        //
        'Qty' => $faker->word,
        
        'PriceEach' => $faker-> randomNumber(3),
        'OrderID' => \App\order::all()->random()->id,
        'ProductCode' => \App\product::all()->random()->Code,
    ];
});

