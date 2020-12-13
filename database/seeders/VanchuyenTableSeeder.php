<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class VanchuyenTableSeeder extends Seeder
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
                'vc_ten'    => "vanchuyen $i",
                'vc_chiPhi' => $faker->randomFloat(2, 20000, 80000),
                'vc_dienGiai'   => "vc_diengiai $i",
                'vc_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'vc_capNhat' => $today->format('Y-m-d H:i:s'),
                'vc_trangThai'  =>  $faker->numberBetween(1,2),
            ]);
        }
        DB::table('vanchuyen')->insert($list);
    }
}
