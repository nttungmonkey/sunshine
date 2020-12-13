<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class KhuyenmaiTableSeeder extends Seeder
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
                'km_ten'    => "khuyenmau $i",
                'km_noiDung'    => "noidungkhuyenmai $i",
                'km_batDau' => $today->format('Y-m-d H:i:s'),
                'km_giaTri' => $faker->numberBetween(5,10),
                'nv_nguoiLap'   => $faker->numberBetween(1,50),
                'km_ngayLap'    => $today->format('Y-m-d H:i:s'),
                'km_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'km_capNhat' => $today->format('Y-m-d H:i:s'),
            ]);
        }
        DB::table('khuyenmai')->insert($list);
    }
}
