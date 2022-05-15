<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminsSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin')->truncate();
        DB::table('admin')->insert([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('admin')->insert([
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
