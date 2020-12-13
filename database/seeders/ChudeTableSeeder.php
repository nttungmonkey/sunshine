<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class ChudeTableSeeder extends Seeder
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
                'cd_ten'    => "Chude $i",           
                'cd_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'cd_capNhat' => $today->format('Y-m-d H:i:s'),
                'cd_trangThai'  =>  $faker->numberBetween(1,2),
            ]);
        }
        DB::table('chude')->insert($list);
    }
}
