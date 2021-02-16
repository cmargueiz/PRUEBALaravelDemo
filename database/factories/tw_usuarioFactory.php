<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\tw_usuarios;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

$factory->define(tw_usuarios::class, function (Faker $faker) {
    return [
        'username'=>$faker->userName,
        'email'=>$faker->email,
        'S_Nombre'=>$faker->name,
        'S_Apellidos'=>$faker->lastName,
        'S_FotoPerfilURL'=>$faker->url,
        'S_Activo'=>1,
        'password'=>Hash::make(12345),
        'verification_token' => Str::random(100),
        'verified'=>Str::random(100),
        'tw_rol_id'=>$faker->unique()->randomDigit

    ];
});
