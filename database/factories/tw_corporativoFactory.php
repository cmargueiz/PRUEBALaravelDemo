<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\tw_corporativos;
use Faker\Generator as Faker;

$factory->define(tw_corporativos::class, function (Faker $faker) {
    return [
        'S_NombreCorto'=>$faker->name,
        'S_NombreCompleto'=>$faker->name,
        'S_LogoURL'=>$faker->url,
        'S_DBName'=>$faker->name,
        'S_DBUsuario'=>$faker->userName,
        'S_DBPassword'=>$faker->password,
        'S_SystemUrl'=>$faker->url,
        'S_Activo'=>0,
        'D_FechaIncorporacion'=>$faker->dateTime(),
        'tw_usuarios_id'=>$faker->numberBetween(1,10),
        'FK_Asignado_id'=>1,

    ];
});
