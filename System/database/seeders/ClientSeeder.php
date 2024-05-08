<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('Clients')->insert([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('none'),
                'cpf' => $faker->numerify('###########'),
                'phone' => $faker->numerify('1599#######'),
                'picture' => $faker->imageUrl(640, 480, 'animals', true),
                'type' => $faker->randomElement(['Normal', 'Preferencial/Idoso', 'Preferencial/Deficiente'])
            ]);
        }
    }
}
