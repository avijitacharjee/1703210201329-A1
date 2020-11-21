<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    return [
        'name'=>$this->faker->name,
        'short_name'=>$this->faker->firstName,
    ];
});
