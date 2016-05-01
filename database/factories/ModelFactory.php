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


$factory->define(App\Junta::class, function (Faker\Generator $faker) {
    return [
        'nombre'			 => $faker->name,
        'feResolucion'		 => $faker->year($max = 'now'),
        'numResolucion' 	 => rand(7891234,92313242),
        'barrio'			 => $faker->randomElement(['Purnio','Las Ferias','Guarino','La Concordia']),
        'nombreP'            => $faker->name,
        'nombreS'            => $faker->name,
        'presidenteCC' 		 => rand(7891234,92313242),
        'secretariaCC'		 => rand(7891234,92313242),
        'direccionSede'		 => $faker->address,
        'telefono'			 => rand(7891234,92313242),
        'firmaS'			 =>$faker->randomElement(['foto1','foto2','foto3','foto4']),
        'firmaP'			 =>$faker->randomElement(['foto1','foto2','foto3','foto4']),
        
    ];
});


$factory->define(App\Evento::class, function (Faker\Generator $faker) {
    return [
        'nombre'			 => $faker->name,
        'detalles'		     => $faker->words(5, true),
        'fecha' 			 => $faker->dateTime($max = 'now'),
        'lugar'		   		 => $faker->randomElement(['La Dorada','Pto Boyaca','Medellin','Bogota']),
        'imagen'			 => $faker->randomElement(['foto1','foto2','foto3','foto4']),

        
    ];
});


$factory->define(App\Beneficiado::class, function (Faker\Generator $faker) {
    return [
        'nombres'			 => $faker->name,
        'apellidos'		     => $faker->lastname,
        'entidad'          => $faker->randomElement(['Secretaria de Planeacion y Desarrollo Social','CONSOL','UDEA','SENA']),
        'feNa' 			     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'cedula'		   	 => rand(7891234,92313242),
        'ciudadCC'			 => $faker->randomElement(['La Dorada','Pto Boyaca','Medellin','Bogota']),
        'reciboServicio'	 => $faker->randomElement(['foto1','foto2','foto3','foto4']),
        'telefono'			 => rand(7891234,92313242),
        'direccion'			 => $faker->address,
        'casaPropia'		 => true,
        'feResidencia'		 => $faker->date($format = 'Y-m-d', $max = 'now'),
        'user_id'			 => rand(1,5),
        'junta_id'			 => rand(1,5),
    ];
});



$factory->define(App\Comentario::class, function (Faker\Generator $faker) {
    return [
        'autor'			 => $faker->name,
        'email'		     => $faker->safeEmail,
        'comentario' 	 => $faker->words(5, true),
        'evento_id'		 => rand(1,9),	
        
                
    ];
});
