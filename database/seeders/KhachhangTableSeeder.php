<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class KhachhangTableSeeder extends Seeder
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

        for ($i = 1; $i <= 50; $i++){
            array_push($list, [
                'kh_taiKhoan'    => "user$i",
                'kh_matKhau'     => "password$i",
                'kh_hoTen'         => $faker->name(),
                'kh_gioiTinh' => $faker->numberBetween(0,2),
                'kh_email'   => "user$i@gmail.com",
                'kh_ngaySinh' =>  $faker->date('Y-m-d', '2005-01-01'),
                'kh_diaChi'   => $faker->address(),
                'kh_dienThoai'=> "09999999$i",
                'kh_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'kh_capNhat' => $today->format('Y-m-d H:i:s'),
                'kh_trangThai'  =>  $faker->numberBetween(1,3),
            ]);
        }
        DB::table('khachhang')->insert($list);
    }
}
