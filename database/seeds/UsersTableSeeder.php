<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();

        $faker = \Faker\Factory::create();

        \App\User::create([
            'name' => 'Geraldo Vitor',
            'email' => 'geraldovitor901@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        foreach (range(1, 10) as $i) {
            \App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Str::random(10)
            ]);
        }
    }
}
