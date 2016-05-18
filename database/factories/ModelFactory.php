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

$factory->define(Appjac\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(Appjac\Junta::class, function (Faker\Generator $faker) {
    return [
        'nombre'			 => $faker->name,
       
        'numResolucion' 	 => rand(7891234,92313242),
        'nit'                => rand(7891234,92313242),
        'barrio'			 => $faker->randomElement(['Purnio','Las Ferias','Guarino','La Concordia']),
        'nombreP'            => $faker->name,
        'nombreS'            => $faker->name,
        'presidenteCC' 		 => rand(7891234,92313242),
        'ciudadCCP'          => $faker->randomElement(['La Dorada','Pto Boyaca','Medellin','Bogota']),
        'secretariaCC'		 => rand(7891234,92313242),
        'direccionSede'		 => $faker->address,
        'telefono'			 => rand(7891234,92313242),
        'firmaS'			 =>$faker->randomElement(['foto1.jpg','foto2.jpg','foto3.jpg','foto4.jpg']),
        'firmaP'			 =>$faker->randomElement(['foto1.jpg','foto2.jpg','foto3.jpg','foto4.jpg']),
        
    ];
});


$factory->define(Appjac\Evento::class, function (Faker\Generator $faker) {
    return [
        'nombre'			 => $faker->name,
        'detalles'		     => $faker->words(5, true),
        'fecha' 			 => $faker->dateTime($max = 'now'),
        'lugar'		   		 => $faker->randomElement(['La Dorada','Pto Boyaca','Medellin','Bogota']),
        'imagen'			 => $faker->randomElement(['foto1.jpg','foto2.jpg','foto3.jpg','foto4.jpg']),

        
    ];
});


$factory->define(Appjac\Beneficiado::class, function (Faker\Generator $faker) {
    return [
        'nombres'			 => $faker->name,
        'apellidos'		     => $faker->lastname,
        'entidad'          => $faker->randomElement(['Secretaria de Planeacion y Desarrollo Social','CONSOL','UDEA','SENA']),
        'feNa' 			     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'cedula'		   	 => rand(7891234,92313242),
        'ciudadCC'			 => $faker->randomElement(['La Dorada','Pto Boyaca','Medellin','Bogota']),
        'reciboServicio'	 => $faker->randomElement(['foto1.jpg','foto2.jpg','foto3.jpg','foto4.jpg']),
        'telefono'			 => rand(7891234,92313242),
        'direccion'			 => $faker->address,
        'casaPropia'		 => true,
        'feResidencia'		 => $faker->date($format = 'Y-m-d', $max = 'now'),
        
        'junta_id'			 => 1,
    ];
});





