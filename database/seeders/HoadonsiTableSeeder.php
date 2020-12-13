<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class HoadonsiTableSeeder extends Seeder
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
                'hds_nguoiMuaHang' => $faker->name(),
                'hds_tenDonVi' => "Donvi $i",
                'hds_diaChi' => $faker->address(),
                'hds_maSoThue' => "1234567$i",
                'nv_lapHoaDon' =>  $faker->numberBetween(1,50),
                'hds_ngayXuatHoaDon' =>  $today->format('Y-m-d H:i:s'),
                'hds_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'hds_capNhat' => $today->format('Y-m-d H:i:s'),
                'tt_ma'  =>  $faker->numberBetween(1,20),
            ]);
        }
        DB::table('hoadonsi')->insert($list);
    }
}
