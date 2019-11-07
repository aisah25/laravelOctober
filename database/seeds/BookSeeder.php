<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 10; $i++) { 
            // insert data buku ke table buku menggunakan faker
            DB::table('books')->insert([
                'judul' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'pengarang' => $faker->name,
                'penerbit' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'tahun' => $faker->year($max = 'now')
            ]);
        }
    }
}
