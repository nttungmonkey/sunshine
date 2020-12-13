<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class HoadonleTableSeeder extends Seeder
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
                'hdl_nguoiMuaHang' => $faker->name(),
                'hdl_diaChi' => $faker->address(),
                'hdl_dienThoai' => "01234567$i",
                'nv_lapHoaDon' =>  $faker->numberBetween(1,50),
                'hdl_ngayXuatHoaDon' =>  $today->format('Y-m-d H:i:s'),
            ]);
        }
        DB::table('hoadonle')->insert($list);
    }
}
