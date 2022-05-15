<?php

namespace Database\Seeders;

use App\Models\Hobbies;
use Illuminate\Database\Seeder;

class HobbiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hobbies::truncate();
        Hobbies::insert([
            ['name' => 'Đá bóng'],
            ['name' => 'Cầu lông'],
            ['name' => 'Leo núi'],
            ['name' => 'Chạy bộ'],
            ['name' => 'Đạp xe'],
            ['name' => 'Gôn'],
            ['name' => 'Bóng chuyền'],
            ['name' => 'Bóng rổ'],
            ['name' => 'Nhảy'],
            ['name' => 'Du lịch'],
            ['name' => 'Bơi'],
            ['name' => 'Câu cá'],
            ['name' => 'Chèo thuyền'],
            ['name' => 'Lặn biển'],
            ['name' => 'Lướt sóng'],
        ]);
    }
}
