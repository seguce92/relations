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

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(6, true)
    ];
});

$factory->define(App\Ticket::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->sentence(6, true),
        'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        }
    ];
});

