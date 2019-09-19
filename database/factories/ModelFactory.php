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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\models\carro::class, function(Faker\Generator $faker){

    return[
        'modelo' => $faker->sentence,
        'tipo' => $faker->sentence,
        'combustivel' =>$faker->sentence,
        'ano_fab' => $faker->sentence,
        'fabricante' => $faker->sentence,
        'cor' => $faker->sentence,
        'carro_id'=> 1,
        'user_id'=> 1,



    ];
});

    
