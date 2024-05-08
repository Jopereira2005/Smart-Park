<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 1; $i++) {
            DB::table('Commerces')->insert([
                'name' => 'Facens',
                'email' => 'facens@facens.br',
                'password' => 'facens',
                'cnpj' => '12345678912345',
                'phone' => '1599999999',
                'picture' => $faker->imageUrl(640, 480, 'animals', true),
                'description' => $faker->text()
            ]);
        }
    }
}
