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

        for ($i = 1; $i <= 10; $i++) {
            $name = "A0" . $i;
            DB::table('Park_lots')->insert([
                'name' => $name,
                'status' => $faker->randomElement(['0', '1']),
                'type' => $faker->randomElement(['Normal', 'Idoso', 'Deficiente']),
                'id_commerce' => 1
            ]);
        }
    }
}
