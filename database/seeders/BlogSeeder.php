<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0;$i < 5;$i++){
            DB::table('blogs')->insert([
                "blog_baslik" => $faker->sentence(2),
                "blog_icerik" => $faker->sentence(10),
                "blog_resim" => $faker->sentence(3),
                "blog_yazar" => "admin",
            ]);
        }
    }
}
