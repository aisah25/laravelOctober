<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data article ke table article
        // DB::table('articles')->insert([
        //     'title' => 'Installing Laravel',
        //     'content' => 'Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.',
        //     'author' => 'Laravel'
        // ]);

        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 50; $i++) { 
            // insert data article ke table article menggunakan faker
            DB::table('articles')->insert([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'content' => $faker->text($maxNbChars = 200),
                'author' => $faker->name
            ]);
        }

    }
}
