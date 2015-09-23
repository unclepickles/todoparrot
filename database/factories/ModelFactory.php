<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(todoparrot\Todolist::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->sentence(4),
    ];
});
