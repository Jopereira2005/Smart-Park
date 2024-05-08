<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $commerces = DB::table('Commerces')->pluck('id')->toArray();
        $clients = DB::table('Clients')->pluck('id')->toArray();

        DB::table('Addresses')->insert([
            'nome' => $faker->word(),
            'complemento' => $faker->sentence(5),
            'bairro' => $faker->sentence(2),
            'numero' => $faker->numerify('##'),
            'rua' => $faker->sentence('2'),
            'cep' => $faker->numerify('########'),
            'id_commerce' => $faker->randomElement($commerces),
        ]);

        for($i = 0;$i < 9;$i++) {
            DB::table('Addresses')->insert([
                'nome' => $faker->word(),
                'complemento' => $faker->sentence(5),
                'bairro' => $faker->sentence(2),
                'numero' => $faker->numerify('##'),
                'rua' => $faker->sentence('2'),
                'cep' => $faker->numerify('18######'),
                'id_client' => $i,
            ]);
        }
    }
}
