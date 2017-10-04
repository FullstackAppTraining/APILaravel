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
use App\Models\Lingua;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Models\Lingua::class,function (Faker\Generator $faker){

    return[
        'designacao'=>$faker->name,
        'abreviatura'=>$faker->unique()->languageCode,
        'pais'=>$faker->text(20)
    ];
});

$factory->define(\App\Models\Calao::class,function (Faker\Generator $faker){

    return[
      'designacao'=>$faker->text(20),
        'lingua_id'=>$faker->unique()->numberBetween(1, Lingua::all()->count())
    ];
});

$factory->define(\App\Models\Palavra::class, function (Faker\Generator $faker){
    return [
        'designacao'=>$faker->text(20),
        'significado'=>$faker->text(20),
        'sinonimo'=>$faker->text(20),
        'lingua_id'=>$faker->numberBetween(1, Lingua::all()->count())
    ];
});


$factory->define(\App\Models\Expressao::class, function (Faker\Generator $faker){
    return [
        'designacao'=>$faker->text(20),
        'significado'=>$faker->text(20),
        'calao_id'=>$faker->numberBetween(1, \App\Models\Calao::all()->count())
    ];
});


$factory->define(\App\Models\PalavraExpressao::class, function (Faker\Generator $faker){
    return [
        'palavra_id'=>$faker->numberBetween(1, Lingua::all()->count()),
        'expressao_id'=>$faker->numberBetween(1, \App\Models\Calao::all()->count())
    ];
});