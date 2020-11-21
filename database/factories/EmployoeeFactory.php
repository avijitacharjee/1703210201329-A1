<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employoee;
use Faker\Generator as Faker;

$factory->define(Employoee::class, function (Faker $faker) {
    return [
        'name'=>$this->faker->name,
        'email'=>$this->faker->email,
        'address'=>$this->faker->address,
        'salary'=>$this->faker->randomNumber(5,false),
        'status'=>$this->faker->boolean,
        'department_id'=>rand(1,5)
    ];
});
