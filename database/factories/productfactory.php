<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\product::class, function (Faker $faker) {
    return [
        'productlineID' => \App\productline::all()->random()->id,
        'Name' => $faker-> word,
        'Scale' => $faker-> randomNumber(3),
        'vendor' => $faker-> word,
        'PdtDescription' => $faker-> word,
        'QtyInStock' => $faker-> randomNumber(3),
        'MSRP' => $faker-> word,
        'BuyPrice' => $faker-> randomNumber(3)
    ];
});