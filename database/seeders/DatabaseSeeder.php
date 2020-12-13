<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            
            LoaiTableSeeder::class,
            VanchuyenTableSeeder::class,
            ThanhtoanTableSeeder::class,
            KhachhangTableSeeder::class,
            XuatxuTableSeeder::class,
            MauTableSeeder::class,
            ChudeTableSeeder::class,
            QuyenTableSeeder::class,
            SanphamTableSeeder::class,           
            NhanvienTableSeeder::class,
            NhacungcapTableSeeder::class,        
            HinhanhTableSeeder::class, 
            KhuyenmaiTableSeeder::class,
            DonhangTableSeeder::class,
            Mau_SanphamTableSeeder::class,
            GopyTableSeeder::class,
            Chude_SanphamTableSeeder::class,
            PhieunhapTableSeeder::class,
            ChitietdonhangTableSeeder::class,
            HoadonsiTableSeeder::class,
            HoadonleTableSeeder::class,
            Khuyenmai_SanphamTableSeeder::class,
            ChitietnhapTableSeeder::class,
            ]);
    }
}
