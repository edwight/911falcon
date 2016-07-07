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

$factory->define(App\Models\User::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'slug' => $faker->slug,
        'phone' => $faker->phoneNumber,   
        'roles' => 'operador',               
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Contacto::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,  
        'direccion' => $faker->address,
        'p_referencia' =>$faker->text,
        'descripcion' =>$faker->text,
    ];
});
/*                                                                                                            
$factory->define(App\Models\User::class, 'admin', function(Faker\Generator $faker){
	 return [
        'name' => 'edwight',
        'email' => 'edwardelgado0@gmail.com',
        'phone' => $faker->phoneNumber,
        'choices' => 'admin',                   
        'password' => '19252368',
        'remember_token' => str_random(10),
    ];
});
*/