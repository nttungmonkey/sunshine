<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;


class NhanvienTableSeeder extends Seeder
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
                'nv_taiKhoan'    => "nv$i",
                'nv_matKhau'     => "nv$i",
                'nv_hoTen'         => $faker->name(),
                'nv_gioiTinh' => $faker->numberBetween(0,2),
                'nv_email'   => "nv$i@gmail.com",
                'nv_ngaySinh' =>  $faker->date('Y-m-d', '2005-01-01'),
                'nv_diaChi'   => $faker->address(),
                'nv_dienThoai'=> "09999999$i",
                'nv_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'nv_capNhat' => $today->format('Y-m-d H:i:s'),
                'nv_trangThai'  =>  $faker->numberBetween(1,3),
                'q_ma'  =>  $faker->numberBetween(1,5)
            ]);
        }
        DB::table('nhanvien')->insert($list);
    }
}
