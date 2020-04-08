<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Info::class, function (Faker $faker) {
    return [

        "name"=>$faker->userName,
        "phone"=>$faker->phoneNumber,
        "period"=>$faker->randomDigit(1,30),
        "id_card"=>$faker->randomDigit(1000000000000000,99999999999999999),
        "work_type"=>$faker->randomDigit(1,3),

    ];
});
