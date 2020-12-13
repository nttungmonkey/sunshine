<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class ThanhtoanTableSeeder extends Seeder
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

        for ($i = 1; $i <= 20; $i++){
            array_push($list, [
                'tt_ten'    => "thanhtoan $i",
                'tt_dienGiai'   => "tt_diengiai $i",
                'tt_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'tt_capNhat' => $today->format('Y-m-d H:i:s'),
                'tt_trangThai'  =>  $faker->numberBetween(1,2),
            ]);
        }
        DB::table('thanhtoan')->insert($list);
    }
}
