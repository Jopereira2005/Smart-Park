<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for($i = 0; $i < 10; $i++) {
            DB::table('Reserves')->insert([
                'date_reserve' => $faker->date(),
                'price_per_hour' => $faker->randomFloat(2, 1, 15),
                'total_price' => $faker->randomFloat(2, 1, 1000),
                'time_enter' => $faker->time(),
                'time_exit' => $faker->time(),
                'payment_method' => $faker->randomElement(['Crédito', 'Dinheiro', 'Pix', 'Débito']),
                'status' => $faker->randomElement(['Reservado', 'Cancelado', 'Finalizado', 'Em Processo', '#']),
                'id_client' => $i,
                'id_park_lot' => $i
            ]);
        }
    }
}
