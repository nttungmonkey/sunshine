<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use DateTime;

class QuyenTableSeeder extends Seeder
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
                'q_ten'    => "Quyen $i",   
                'q_dienGiai'    => "Diengiai $i",        
                'q_taoMoi' =>  $today->format('Y-m-d H:i:s'),
                'q_capNhat' => $today->format('Y-m-d H:i:s'),
                'q_trangThai'  =>  $faker->numberBetween(1,2),
            ]);
        }
        DB::table('quyen')->insert($list);
    }
}
