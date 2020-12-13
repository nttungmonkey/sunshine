<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class Mau_SanphamTableSeeder extends Seeder
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

        for ($i = 1; $i <= 5; $i++){
            array_push($list, [
                'm_ma'    => $faker->numberBetween(1,5),           
                'sp_ma' =>  $faker->numberBetween(1,50),
                'msp_soluong' => $faker->numberBetween(50,100),
            ]);
        }
        DB::table('mau_sanpham')->insert($list);
    }
}
