<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ParkLotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $commerces = DB::table('Commerces')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('Park_lots')->insert([
                'name' => $faker->name(),
                'status' => $faker->randomElement(['0', '1', '2']),
                'type' => $faker->randomElement(['Normal', 'Preferencial/Idoso', 'Preferencial/Deficiente']),
                'id_commerce' => $faker->randomElement($commerces)
            ]);
        }
    }
}
