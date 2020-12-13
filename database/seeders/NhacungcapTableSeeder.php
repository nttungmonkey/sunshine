<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class NhacungcapTableSeeder extends Seeder
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
                'ncc_ten'    => "Nhacungcap $i",
                'ncc_daiDien'   => $faker->name(),
                'ncc_email'   => "ncc$i@gmail.com",
                'ncc_diaChi'   => $faker->address(),
                'ncc_dienThoai'=> "09999999$i",
                'ncc_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'ncc_capNhat' => $today->format('Y-m-d H:i:s'),
                'ncc_trangThai'  =>  $faker->numberBetween(1,2),
                'xx_ma' => $faker->numberBetween(1,5)
            ]);
        }
        DB::table('nhacungcap')->insert($list);
    }
}
