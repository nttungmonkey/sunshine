<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class Chude_SanphamTableSeeder extends Seeder
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
                'sp_ma'  =>  $faker->numberBetween(1,50),
                'cd_ma'  =>  $faker->numberBetween(1,5)
            ]);
        }
        DB::table('chude_sanpham')->insert($list);
    }
}
