<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HizmetlerimizSeeder extends Seeder
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
            DB::table('hizmetlerimizs')->insert([
                "hizmet_baslik" => $faker->sentence(2),
                "hizmet_icerik" => $faker->sentence(10),
                "hizmet_resim" => $faker->sentence(3),
                "hizmet_selflink" => $faker->sentence(3),
            ]);
        }
    }
}
