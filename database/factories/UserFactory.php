<?php

use Faker\Generator as Faker;
use App\User;
use App\Category;
use App\Tasks;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->unique()->phoneNumber,
        'address' => $faker->address,
        'role_type' => $faker->randomElement(['User','Admin']),
        'public_status' => $faker->randomElement(['0', '1']),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //  secret   
    ];
});

$factory->define(App\Category::class, function (Faker $faker)
{
    return [
        'user_id' => User::all()->random()->id,
        'category_name' => $faker->word,
        'public_status' => $faker->randomElement(['0', '1']),
    ];
});

$factory->define(App\Tasks::class, function (Faker $faker)
{
    $user = User::has('categories')->get()->random();
    
    return [
        'user_id' => $user->id,
        'category_id' => $user->categories->random()->id,
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'working_date' => $faker->date,
        'public_status' => $faker->randomElement(['0', '1', '2']),

    ];
});