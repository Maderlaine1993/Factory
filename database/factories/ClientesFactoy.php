<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\clientes;
use Faker\Generator as Faker;

$factory->define(clientes::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->streetAddress,
        'telefono' => $faker->tollFreePhoneNumber,
        'email' => $faker->email
    ];
});
