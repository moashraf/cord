<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{


public function run() {




$faker = Faker\Factory::create();

    for($i = 0; $i < 5; $i++) {
        App\User::create([
        'name' => $faker->name  ,
        'email' => $faker->email,
        'password' => bcrypt(123456),
         ]);
    }




    }



}
