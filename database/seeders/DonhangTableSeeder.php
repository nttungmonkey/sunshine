<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class DonhangTableSeeder extends Seeder
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
                'kh_ma'    => $faker->numberBetween(1,10),
                'dh_thoiGianDatHang' =>  $today->format('Y-m-d H:i:s'),
                'dh_thoiGianNhanHang' => $today->format('Y-m-d H:i:s'),    
                'dh_nguoiNhan'  => $faker->name(),
                'dh_diaChi' => $faker->address(),
                'dh_dienThoai' => "09090909$i",
                'dh_nguoiGui' => $faker->name(),
                'dh_loiChuc' => "Loichuc $i",
                'dh_ngayXuLy' =>  $today->format('Y-m-d H:i:s'),
                'dh_ngayLapPhieuGiao' =>  $today->format('Y-m-d H:i:s'),
                'dh_ngayGiaoHang'     =>  $today->format('Y-m-d H:i:s'),
                'dh_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'dh_capNhat' => $today->format('Y-m-d H:i:s'),
                'vc_ma' => $faker->numberBetween(1,10),
                'tt_ma' => $faker->numberBetween(1,20),
            ]);
        }
        DB::table('donhang')->insert($list);
    }
}
