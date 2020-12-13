<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class ChitietnhapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $today = new DateTime();
        $faker = Faker::create('vi_VN');

        for ($i = 1; $i <= 10; $i++){
            array_push($list,[
                'pn_ma'  =>  $faker->numberBetween(1,20),
                'sp_ma'  =>  $faker->numberBetween(1,50),
                'm_ma'  =>  $faker->numberBetween(1,5),

            ]);
        }
        DB::table('chitietnhap')->insert($list);
    }
}
