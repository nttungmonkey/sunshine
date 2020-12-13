<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class GopyTableSeeder extends Seeder
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
                'gy_noiDung'    => "gopy $i",           
                'gy_thoiGian' =>  $today->format('Y-m-d H:i:s'),
                'kh_ma' => $faker->numberBetween(1,10),
                'sp_ma'  =>  $faker->numberBetween(1,50),
            ]);
        }
        DB::table('gopy')->insert($list);
    }
}
