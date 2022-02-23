<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory as factory;

use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Children>
 */
$factory->define(Note::class, function (Faker $faker) {
    return [
        'name' => $faker->name, 
        'DOB' => $faker->dateTime(), 
    ];
});
