<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pengguna;
use Faker\Generator as Faker;

$factory->define(Pengguna::class, function (Faker $faker) {
    return [
        'nama_lengkap' => $faker->name,
        'jk' => $faker->randomElement($array = array ('Laki-Laki', 'Perempuan')),
        'tgl_lahir' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->postcode,
        'password' => $faker->password,
    ];
});

