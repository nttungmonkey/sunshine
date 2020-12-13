<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class PhieunhapTableSeeder extends Seeder
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
                'pn_nguoiGiao'    => "thanhtoan $i",
                'pn_soHoaDon'   => "tt_diengiai $i",
                'pn_ngayXuatHoaDon' => $today->format('Y-m-d H:i:s'),
                'pn_ghiChu' => "ghichu $i",
                'nv_nguoiLapPhieu' => $faker->numberBetween(1,50),
                'pn_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'pn_capNhat' => $today->format('Y-m-d H:i:s'),
                'ncc_ma'    => $faker->numberBetween(1,10)
            ]);
        }
        DB::table('phieunhap')->insert($list);
    }
}
