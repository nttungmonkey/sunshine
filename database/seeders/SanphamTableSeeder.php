<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class SanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $faker = Faker::create('vi_VN');
        $today = new DateTime();

        for($i=1; $i<=50; $i++){
            array_push($list, [
                'sp_ten'    =>  "sanpham $i",
                'sp_giaGoc' =>  $faker->randomFloat(2, 50000, 500000),
                'sp_giaBan' =>  $faker->randomFloat(2, 100000, 1000000),
                'sp_hinh'   =>  "hoa-$i.jpg",
                'sp_thongTin'   =>  "sp_thongtin $i",
                'sp_danhGia'    =>  "sp_danhgia $i",
                'sp_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'sp_capNhat' => $today->format('Y-m-d H:i:s'),
                'sp_trangThai'  =>  $faker->numberBetween(1,2),
                'l_ma'  =>  $faker->numberBetween(1,9),
            ]);
        }
        DB::table('sanpham')->insert($list);

    }
}
