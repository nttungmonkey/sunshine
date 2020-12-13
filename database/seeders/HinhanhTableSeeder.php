<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class HinhanhTableSeeder extends Seeder
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
            array_push($list, [
                'ha_stt'    => "$i",           
                'ha_ten'    => "hinhanh $i",
                'sp_ma'     => $faker->numberBetween(1,50)
            ]);
        }
        DB::table('hinhanh')->insert($list);
    }
}
