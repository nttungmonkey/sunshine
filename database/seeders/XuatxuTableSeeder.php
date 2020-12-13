<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class XuatxuTableSeeder extends Seeder
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

        for ($i = 1; $i <= 5; $i++){
            array_push($list, [
                'xx_ten'    => "Xuatxu $i",           
                'xx_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'xx_capNhat' => $today->format('Y-m-d H:i:s'),
                'xx_trangThai'  =>  $faker->numberBetween(1,2),
            ]);
        }
        DB::table('xuatxu')->insert($list);
    }
}
